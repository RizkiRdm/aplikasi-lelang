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

Route::get('/dashboard', function () {
    return view('admin.admin');
});

Route::get('/dashboard/admin/barang', function () {
    return view('admin.barang');
});

Route::get('/dashboard/admin/laporan', function () {
    return view('admin.laporan');
});
