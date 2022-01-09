<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\eventController;
use App\Http\Controllers\admin\paymentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [dashboardController::class, 'index'])->name('dasboard');
Route::get('/event', [eventController::class, 'index'])->name('event');
Route::get('/detail', [eventController::class, 'store'])->name('detail');
Route::get('/create-event', [eventController::class, 'create'])->name('event');
Route::get('/payment', [paymentController::class, 'index'])->name('payment');
Route::get('/create-payment', [paymentController::class, 'create'])->name('event');
