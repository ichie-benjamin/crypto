<?php


use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CurrenciesController;
use App\Http\Controllers\admin\PackagesController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\TradesController;
use App\Http\Controllers\admin\UsersController;

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [AdminDashboardController::class,'index'])->name('dashboard');

    Route::get('user/{id}/login/logs', [UsersController::class,'loginLogs'])->name('user.logins');

    Route::get('user/login/logs', [UsersController::class,'myLoginLogs'])->name('user.logins.logs');

    Route::get('users/ids', [UsersController::class,'Ids'])->name('users.ids');

    Route::post('user/fundaccount', [UsersController::class,'fundAccount'])->name('user.fundaccount');
    Route::post('user/fundbonus', [UsersController::class,'fundBonus'])->name('user.fundbonus');

    Route::get('users/active/plans', [UsersController::class,'activePlans'])->name('users.active.plans');

    Route::get('withdrawals/all', [PackagesController::class,'allWithdrawals'])->name('withdrawals.index');


    Route::get('deposits/all', [PackagesController::class,'allDeposits'])->name('deposits.index');
    Route::post('deposits/approve', [PackagesController::class,'approve'])->name('deposit.approve');
    Route::get('deposits/delete/{id}', [PackagesController::class,'destroyDeposit'])->name('deposit.destroy');


    Route::resources([
        'settings' => SettingsController::class,
        'users' => UsersController::class,
        'packages' => PackagesController::class,
        'currencies' => CurrenciesController::class,
        'trades' => TradesController::class,
    ]);
});
