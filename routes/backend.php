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

    Route::get('/deposit/view/{id}', [DashboardController::class, 'viewDeposit'])->name('deposit.view');

    Route::get('/withdrawals', [WithdrawalController::class, 'myWithdrawals'])->name('withdrawals.index');
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


    Route::resources([
        'deposits' => DepositsController::class,
    ]);
});

