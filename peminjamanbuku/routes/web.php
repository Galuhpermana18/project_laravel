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
    return redirect('dashboard');
});
Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

//databuku
Route::get('/databuku', 'DatabukuController@index')->name('databuku');
Route::get('/databuku/tambah', 'DatabukuController@tambah')->name('tambah_buku');
Route::post('/databuku/simpan', 'DatabukuController@simpan')->name('simpan_buku');
Route::get('/databuku/edit/{id}', 'DatabukuController@edit')->name('edit_buku');
Route::patch('/databuku/update/{id}', 'DatabukuController@update');
Route::delete('/databuku/{id}', 'DatabukuController@delete');

//datapeminjaman
Route::get('/datapeminjaman', 'PeminjamanController@index')->name('datapeminjaman');
Route::get('/datapeminjaman/tambah', 'PeminjamanController@tambah')->name('tambah_peminjam');
Route::post('/datapeminjaman/simpan', 'PeminjamanController@simpan')->name('simpan_peminjam');
Route::delete('/datapeminjaman/kembalikan/{id}', 'PeminjamanController@kembalikan')->name('kembalikan_stok_buku');
