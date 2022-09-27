<?php

use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
require __DIR__.'/auth.php';
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function(){
        /******************************** Start Admin Routes ****************** */
        Route::get('/dashboard', [Dashboard\DashboardController::class, 'index'])->name('dashboard');
    
});