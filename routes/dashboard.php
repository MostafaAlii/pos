<?php

use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:admin']
    ], function(){
        /******************************** Start Admin Routes ****************** */
        Route::group(['prefix' => 'admin'], function () {
            Route::get('dashboard', [Dashboard\DashboardController::class, 'index'])->name('dashboard');
            // admins ::
            Route::resource('admins', Dashboard\AdminController::class);
        });
});