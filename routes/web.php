<?php

use App\Http\Controllers\DepositsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Auth::routes();

Route::get('/deposit/{id}/purchase', [DepositsController::class, 'purchase'])->name('deposit.purchase')->middleware('auth');


Route::resources([
    'deposit' => DepositsController::class,
]);

//Route::get('/deposit/create', [DepositsController::class, 'depositFund'])->name('deposit.fund');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

include('backend.php');
include('admin.php');

Route::group(['prefix' => 'filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
