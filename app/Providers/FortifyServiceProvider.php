<?php
namespace App\Providers;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use App\Actions\Fortify\{ResetUserPassword, UpdateUserPassword, UpdateUserProfileInformation, CreateNewUser};
use Illuminate\Support\Facades\{Config, RateLimiter};
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Laravel\Fortify\Contracts\LoginResponse;
class FortifyServiceProvider extends ServiceProvider {
    public function register() {
        $request = request();
        if($request->is('admin/*')) {
            Config::set('fortify.guard', 'admin');
            Config::set('fortify.passwords', 'admins');
            Config::set('fortify.prefix', 'admin');
        }
        $this->app->instance(LoginResponse::class, new class implements LoginResponse {
            public function toResponse($request) {
                if ($request->user('admin')) 
                    return redirect()->intended(RouteServiceProvider::ADMIN_DASHBOARD);
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        });
    }

    public function boot() {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);
        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;
            return Limit::perMinute(5)->by($email.$request->ip());
        });
        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
        Fortify::viewPrefix(Config::get('fortify.guard') == 'admin' ? 'dashboard.auth.admin.' : 'dashboard.auth.user.');
    }
}
