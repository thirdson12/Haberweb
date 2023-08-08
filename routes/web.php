<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EditorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WriterController;

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
    return view('welcome');
});

Auth::routes();



Route::get('/dashboard', [HomeController::class, 'index1'])->name('dashboard');

Route::middleware(['auth', 'user-access:admin'])->prefix("admin")->group(function () {

    Route::resource('/', AdminController::class);
});

//
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::resource('/user', UserController::class);
});

//

Route::middleware(['auth', 'user-access:writer'])->group(function () {

    Route::resource('/Writer', WriterController::class);
});

//
Route::middleware(['auth', 'user-access:editor'])->group(function () {

    Route::resource('/editor', EditorController::class);
});
