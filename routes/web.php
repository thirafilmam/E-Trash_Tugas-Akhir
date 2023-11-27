<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
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

Route::prefix('admin')->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('register', 'register')->name('admin.register');
        Route::post('register', 'registerSimpan')->name('admin.register.simpan');

        Route::get('login', 'login')->name('admin.login');
        Route::post('login', 'loginAksi')->name('admin.login.aksi');

        Route::get('logout', 'logout')->middleware('auth')->name('admin.logout');
    });

    Route::middleware('auth')->group(function () {
        Route::get('dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::controller(BarangController::class)->prefix('barang')->group(function () {
            Route::get('', 'index')->name('admin.barang');
            Route::get('tambah', 'tambah')->name('admin.barang.tambah');
            Route::post('tambah', 'simpan')->name('admin.barang.tambah.simpan');
            Route::get('edit/{id}', 'edit')->name('admin.barang.edit');
            Route::post('edit/{id}', 'update')->name('admin.barang.tambah.update');
            Route::get('hapus/{id}', 'hapus')->name('admin.barang.hapus');
        });

        Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
            Route::get('', 'index')->name('admin.kategori');
            Route::get('tambah', 'tambah')->name('admin.kategori.tambah');
            Route::post('tambah', 'simpan')->name('admin.kategori.tambah.simpan');
            Route::get('edit/{id}', 'edit')->name('admin.kategori.edit');
            Route::post('edit/{id}', 'update')->name('admin.kategori.tambah.update');
            Route::get('hapus/{id}', 'hapus')->name('admin.kategori.hapus');
        });
    });
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/tes', function () {
    return view('index');
});
Route::get('/harga', function () {
    return view('user.layanan.layanan-harga-sampah');
});
Route::get('/about', function () {
    return view('user.about');
});
Route::get('/testi', function () {
    return view('user.testimoni');
});
