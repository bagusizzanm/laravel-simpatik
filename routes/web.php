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
    return view('menu/dashboard');
});
Route::get('/login', function () {
    return view('auth/login');
});
Route::get('/lupa-password', function () {
    return view('auth/lupa-password');
});
Route::get('/wisata', function () {
    return view('menu/wisata');
});
Route::get('/transaksi', function () {
    return view('menu/transaksi');
});
Route::get('/logtransaksi', function () {
    return view('menu/log-transaksi');
});
