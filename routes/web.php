<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Notification\WebNotificationController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');

Route::get('/users', [UserController::class, 'users'])
    ->name('users')
    ->middleware('auth');

Route::get('/user/{id}', [UserController::class, 'user'])
    ->name('user')
    ->middleware('auth');

Route::patch('update/{id}', [UserController::class, 'update'])
    ->name('update')
    ->middleware('auth');

Route::get('/about', [AboutController::class, 'about'])
    ->name('about')
    ->middleware('auth');

Route::post('/store-token', [WebNotificationController::class, 'storeToken'])
    ->name('store.token');



