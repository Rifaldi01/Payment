<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\user\DashboardController as UserDashboardController;
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
Route::get('/', [DashboardController::class, 'index']);
Route::resource('event', EventController::class)->names('admin.event');
Route::get('admin/event/publish/{id}', [EventController::class, 'publish'])->name('admin.event.publish');
Route::get('admin/event/expired/{id}', [EventController::class, 'expired'])->name('admin.event.expired');
Route::resource('payement', PaymentController::class)->names('admin.payment');
Route::resource('client', ClientController::class)->names('admin.client');




//user
Route::get('/dashboard', [UserDashboardController::class, 'index']);
