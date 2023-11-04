<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('out');
Route::get('/daftar', [LoginController::class, 'viewRegister'])->middleware('guest')->name('daftar');
Route::get('/daftar/regis', [LoginController::class, 'daftarAkun'])->name('regis');


Route::get('/user', [UserController::class, 'index'])->name('user');

Route::get('user/daftar', [UserController::class, 'ViewPendaftaran'])->name('pendaftaran');
Route::post('user/daftar/input', [UserController::class, 'inputPendaftaran'])->name('inputDataSiswa');

Route::get('user/daftar2', [UserController::class, 'ViewPendaftaran2'])->name('pendaftaran2');
Route::post('user/daftar2/input', [UserController::class, 'inputPendaftaran2'])->name('inputDataSiswa2');

Route::get('user/berkas', [UserController::class, 'ViewBerkas'])->name('berkasUser');

Route::get('user/pengumuman', [UserController::class, 'ViewPengumuman'])->name('pengumuman');

Route::get('admin', [AdminController::class, 'ViewBerkas'])->name('admin');
Route::get('admin/berkas/{id}', [AdminController::class, 'ViewBerkasPendaftaran'])->name('berkas');
Route::get('admin/akun', [AdminController::class, 'ViewDaftarAkun'])->name('akun');
Route::get('admin/confirm/{id}/{status}', [AdminController::class, 'confirm'])->name('confirm');
Route::get('admin/hapus/{id}', [AdminController::class, 'hapus'])->name('hapus');
