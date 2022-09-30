<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Http\Contract;
use App\Http\Repository;
class RepositoryServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->bind(Contract\AdminInterface::class, Repository\AdminRepository::class);
    }

    public function boot() {
        //
    }
}
