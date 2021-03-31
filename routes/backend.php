<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepositsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WithdrawalController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard', 'as' => 'backend.'], function() {
//Route::group(['prefix' => 'dashboard', 'as' => 'backend.'], function() {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/account/overview', [DashboardController::class, 'overview'])->name('account.overview');

    Route::get('/deposit/{id}/proof/upload', [DepositsController::class, 'proof'])->name('deposits.proof');

    Route::get('/deposit/fund', [DepositsController::class, 'depositFund'])->name('deposit.fund');
    Route::get('/deposit/fund/upload', [DepositsController::class, 'depositFundUpload'])->name('deposit.fund.upload');
    Route::get('/deposit/fund/proof', [DepositsController::class, 'depositProof'])->name('deposit.proof');

    Route::get('/deposit/view/{id}', [DashboardController::class, 'viewDeposit'])->name('deposit.view');

    Route::get('/withdrawals', [WithdrawalController::class, 'myWithdrawals'])->name('withdrawals.index');
    Route::get('/bonus/withdrawals', [WithdrawalController::class, 'myBonusWithdrawals'])->name('bonus.withdrawals.index');
    Route::get('/withdrawal/processing/{id}', [WithdrawalController::class, 'processing'])->name('withdrawal.processing');
    Route::post('/withdrawal/processed/{id}', [WithdrawalController::class, 'processed'])->name('withdrawal.processed');
    Route::post('/withdrawal/store', [WithdrawalController::class, 'store'])->name('withdrawals.store');

    Route::post('/withdrawal/update/{id}', [WithdrawalController::class, 'update'])->name('withdrawal.update');

    Route::get('/btc/withdrawal', [WithdrawalController::class, 'btcWithdrawal'])->name('btc.withdrawal');
    Route::get('/pending/withdrawals', [WithdrawalController::class, 'pendingWithdrawal'])->name('pending.withdrawal');
    Route::get('/verify/withdrawal', [WithdrawalController::class, 'verify'])->name('verify.withdrawal');


    Route::get('/trades', [DashboardController::class, 'myTrades'])->name('trades.index');
    Route::get('/account/security', [DashboardController::class, 'security'])->name('account.security');

    Route::get('/account/upload/id', [DashboardController::class, 'uploadId'])->name('account.upload.id');

    Route::get('/profile/edit', [DashboardController::class, 'editProfile'])->name('profile.edit');
    Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');
    Route::post('/profile/upload/store', [UserController::class, 'storeId'])->name('id.store');
    Route::get('/id/processing', [UserController::class, 'idProcessing'])->name('id.processing');
    Route::get('/id/proceed', [UserController::class, 'idProceed'])->name('id.proceed');

    Route::get('/profile/upload/id', [UserController::class, 'uploadId'])->name('profile.upload.id');

    Route::get('/user/login/logs', [DashboardController::class, 'loginLogs'])->name('user.login.logins');

    Route::get('/transactions', [DashboardController::class, 'transactions'])->name('transactions');
    Route::get('/pending/deposits', [DashboardController::class, 'pendingDeposits'])->name('pending.deposit');

    Route::get('/{id}/gateway', [DashboardController::class, 'gateway'])->name('gateway');


    Route::post('/deposits/store', [DepositsController::class, 'depositStore'])->name('deposit.store');

    Route::post('/deposit/save', [DepositsController::class, 'dStore'])->name('deposit.save');


    Route::resources([
        'deposits' => DepositsController::class,
    ]);

    Route::get('/upgrade', [DepositsController::class, 'upgrade'])->name('upgrade');

});

