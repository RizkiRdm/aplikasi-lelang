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

// Route Admin
Route::get('/dashboard/admin', function () {
    return view('admin.admin');
});

Route::get('/dashboard/admin/barang', function () {
    return view('admin.barang');
});

Route::get('/dashboard/admin/laporan', function () {
    return view('admin.laporan');
});

Route::get('/dashboard/admin/petugas', function () {
    return view('admin.laporan');
});


// Route Petugas
Route::get('/dashboard/petugas', function () {
    return view('petugas.petugas');
});

Route::get('/dashboard/petugas/barang', function () {
    return view('petugas.barang');
});

Route::get('/dashboard/petugas/laporan', function () {
    return view('petugas.laporan');
});

// Route Masyarakat

Route::get('/', function () {
    return view('masyarakat.index');
});

Route::get('/detail', function () {
    return view('masyarakat.detail');
});
