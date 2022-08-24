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
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/data_admin', function () {
    return view('data_admin');
});
Route::get('/data_hrd', function () {
    return view('data_hrd');
});
Route::get('/data_karu', function () {
    return view('data_karu');
});
Route::get('/data_karyawan', function () {
    return view('data_karyawan');
});
Route::get('/laporan_absen', function () {
    return view('laporan_absen');
});
Route::get('/laporan_pulang', function () {
    return view('laporan_pulang');
});
Route::get('/cetak_laporan', function () {
    return view('charts');
});
Route::get('/cetak_data', function () {
    return view('tables');
});
Route::get('/jadwal', function () {
    return view('jadwal');
});
Route::get('/shift', function () {
    return view('shift');
});
Route::post('/add', function () {
    return view('add');
});
Route::delete('/delete', function () {
    return view('add');
});
Route::put('/edit', function () {
    return view('edit');
});

