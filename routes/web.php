<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LaporanController;

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

Route::get('user/daftar-ulang', [UserController::class, 'ViewDaftarULang'])->name('daftarUlang');
Route::post('user/daftar-ulang/input', [UserController::class, 'inputDaftarUlang'])->name('inputDaftarUlang');

Route::get('admin', [AdminController::class, 'ViewBerkas'])->name('admin');
Route::get('admin/berkas/{id}', [AdminController::class, 'ViewBerkasPendaftaran'])->name('berkas');
Route::get('admin/akun', [AdminController::class, 'ViewDaftarAkun'])->name('akun');
Route::post('admin/confirm', [AdminController::class, 'confirm'])->name('confirm');
Route::get('admin/edit/status/{id}/{status}/{nisn}', [AdminController::class, 'editStatus'])->name('editStatus');
Route::get('admin/hapus/{id}', [AdminController::class, 'hapus'])->name('hapus');
Route::get('admin/hapus/akun/{id}', [AdminController::class, 'hapusAkun'])->name('hapusAkun');
Route::get('admin/modal_edit/akun/{id}', [AdminController::class, 'modalEditAkun'])->name('modalEditAkun');
Route::post('admin/edit/akun', [AdminController::class, 'editAkun'])->name('editAkun');

Route::get('admin/laporan', [LaporanController::class, 'viewLaporan'])->name('laporan');