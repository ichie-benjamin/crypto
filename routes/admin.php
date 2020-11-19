<?php


use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CurrenciesController;
use App\Http\Controllers\admin\PackagesController;
use App\Http\Controllers\admin\SettingsController;

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [AdminDashboardController::class,'index'])->name('dashboard');


    Route::resources([
        'settings' => SettingsController::class,
        'packages' => PackagesController::class,
        'currencies' => CurrenciesController::class,
    ]);
});
