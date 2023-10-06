<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [LoginController::class, 'index'])->name('login');


Route::get('user', [UserController::class, 'index'])->name('index');
Route::get('user/daftar', [UserController::class, 'ViewPendaftaran'])->name('pendaftaran');
Route::get('user/daftar2', [UserController::class, 'ViewPendaftaran2'])->name('pendaftaran2');
