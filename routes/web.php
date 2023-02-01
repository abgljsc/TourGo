<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('webpage');
});

Route::get('/cariwisata', function () {
    return view('cari_wisata');
});

Route::get('/pesan', function () {
    return view('pesan');
});

Route::get('/guide', function () {
    return view('guide');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});

Route::get('/bayar', function () {
    return view('pembayaran');
});
Route::get('/promo', function () {
    return view('promo');
});
Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'index'])->name('SignUp');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
