<?php


use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\CurrenciesController;
use App\Http\Controllers\admin\CurrencyPairController;
use App\Http\Controllers\admin\PackagesController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\TradesController;
use App\Http\Controllers\admin\UsersController;

Route::group(['middleware' => ['auth','role:admin|super_admin'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('dashboard', [AdminDashboardController::class,'index'])->name('dashboard');

    Route::get('user/{id}/login/logs', [UsersController::class,'loginLogs'])->name('user.logins');

    Route::get('send/proof', [AdminDashboardController::class,'sendProof'])->name('send.proof');
    Route::post('mail/proof', [AdminDashboardController::class,'mailProof'])->name('mail.proof');

    Route::get('user/login/logs', [UsersController::class,'myLoginLogs'])->name('user.logins.logs');

    Route::get('users/ids', [UsersController::class,'Ids'])->name('users.ids');

    Route::get('connect/account/{id}', [UsersController::class,'connectAccount'])->name('connect.account');


    Route::get('id/activate/{id}', [UsersController::class,'IdActivate'])->name('approve.id');

    Route::post('user/fundaccount', [UsersController::class,'fundAccount'])->name('user.fundaccount');

    Route::get('user/toggle/trade/{id}', [UsersController::class,'toggleTrade'])->name('user.trade.toggle');
    Route::get('user/toggle/withdraw/{id}', [UsersController::class,'toggleWithdraw'])->name('user.withdraw.toggle');
    Route::get('user/toggle/upgrade/{id}', [UsersController::class,'toggleUpgrade'])->name('user.upgrade.toggle');
    Route::post('user/fundbonus', [UsersController::class,'fundBonus'])->name('user.fundbonus');

    Route::get('users/active/plans', [UsersController::class,'activePlans'])->name('users.active.plans');

    Route::get('user/toggle/{id}', [UsersController::class,'toggleActive'])->name('user.toggle');

    Route::get('withdrawals/all', [PackagesController::class,'allWithdrawals'])->name('withdrawals.index');
    Route::post('withdrawal/approve/{id}', [PackagesController::class,'withdrawalApprove'])->name('withdrawal.approve');
    Route::get('withdrawals/approve/{id}', [PackagesController::class,'withdrawalsApprove'])->name('withdrawals.approve');


    Route::get('deposits/all', [PackagesController::class,'allDeposits'])->name('deposits.index');
    Route::post('deposits/approve', [PackagesController::class,'approve'])->name('deposit.approve');
    Route::get('deposits/delete/{id}', [PackagesController::class,'destroyDeposit'])->name('deposit.destroy');

    Route::get('/settings/mails', [SettingsController::class,'mails'])->name('settings.mails');
    Route::get('/user/sendmail/{id}', [UsersController::class,'sendMessage'])->name('user.sendmail');
    Route::post('/user/send_msg', [UsersController::class,'sendMsg'])->name('user.send_msg');


    Route::resources([
        'settings' => SettingsController::class,
        'users' => UsersController::class,
        'packages' => PackagesController::class,
        'currences' => CurrenciesController::class,
        'currencies' => CurrencyPairController::class,
        'trades' => TradesController::class,
    ]);
});
