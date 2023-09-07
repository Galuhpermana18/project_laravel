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

// untuk routing
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
Route::get('hubin','HubinController@index')->name('hubin')->middleware(['checkRole:admin,hubin']);
Route::get('siswa', function () { return view('siswa'); });
// guru
Route::get('/datamaster/dataguru' , 'DataGuruController@index')->name('d-guru');
Route::get('/datamaster/dataguru/tambah', 'DataGuruController@tambah')->name('tambah_guru');
Route::post('/datamaster/dataguru/simpan', 'DataGuruController@simpan')->name('simpan_guru');
Route::get('/datamaster/dataguru/edit/{id}', 'DataGuruController@edit')->name('edit_guru');
Route::put('/datamaster/dataguru/edit_guru/{id}','DataGuruController@update')->name('updatedata_guru');
Route::delete('gurus/{guru}', 'DataGuruController@delete');
//kelas
Route::get('/datamaster/datakelas' , 'DataKelasController@index')->name('d-kelas');
Route::get('/datamaster/datakelas/tambah', 'DataKelasController@tambah')->name('tambah_kelas');
Route::post('/datamaster/datakelas/simpan', 'DataKelasController@simpan')->name('simpan_kelas');
Route::get('/datamaster/datakelas/edit/{id}', 'DataKelasController@edit')->name('edit_kelas');
Route::put('/datamaster/datakelas/edit_kelas/{id}','DataKelasController@update')->name('updatedata_kelas');
Route::delete('kelas/{kelas}', 'DataKelasController@delete');
//siswa
Route::get('/datamaster/datasiswa' , 'DataSiswaController@index')->name('d-siswa');
Route::get('/datamaster/datasiswa/tambah', 'DataSiswaController@tambah')->name('tambah_siswa');
Route::post('/datamaster/datasiswa/simpan', 'DataSiswaController@simpan')->name('simpan_siswa');
Route::get('/datamaster/datasiswa/edit/{id}', 'DataSiswaController@edit')->name('edit_siswa');
Route::put('/datamaster/datasiswa/edit_siswa/{id}','DataSiswaController@update')->name('updatedata_siswa');
Route::delete('siswas/{siswa}', 'DataSiswaController@delete');

//mapel
Route::get('/datamapel' , 'DatamapelController@index')->name('d-mapel');
Route::get('/datamapel/tambah', 'DatamapelController@tambah')->name('tambah_mapel');
Route::post('/datamapel/simpan', 'DatamapelController@simpan')->name('simpan_mapel');
Route::get('/datamapel/edit/{id}', 'DatamapelController@edit')->name('edit_mapel');
Route::put('/datamapel/edit_mapel/{id}','DatamapelController@update')->name('updatedata_mapel');
Route::delete('datamapel/{datamapel}', 'DatamapelController@delete');

//datanilai
Route::get('/datanilai' , 'DatanilaiController@index')->name('d-nilai');
Route::get('/datanilai/tambah', 'DatanilaiController@tambah')->name('tambah_nilai');
Route::post('/datanilai/simpan', 'DatanilaiController@simpan')->name('simpan_nilai');
Route::get('/datanilai/edit_nilai/{id}', 'DatanilaiController@edit')->name('edit_nilai');
Route::put('/datanilai/edit_nilai/{id}','DatanilaiController@update')->name('updatedata_nilai');
Route::delete('datanilai/{datanilai}', 'DatanilaiController@delete');

//datarapot
Route::get('/datarapot' , 'DatarapotController@index')->name('d-rapot');
Route::get('/datarapot/tambah', 'DatarapotController@tambah')->name('tambah_rapot');
Route::post('/datarapot/simpan','DatarapotController@simpan')->name('simpan_rapot');
Route::get('/datarapot/detail/{id}','DatarapotController@detail')->name('detail_rapot');
Route::get('cetakrapot/cetak_pdf/{datarapot}','DatarapotController@cetak_pdf');

//uasanduts
Route::get('/uasanduts' , 'UasandutsController@index')->name('uasanduts');
Route::get('/uasanduts/tambah', 'UasandutsController@tambah')->name('tambah_uasanduts');
Route::post('/uasanduts/simpan','UasandutsController@simpan');

//keterampilan
Route::get('/keterampilan' , 'KeterampilanController@index')->name('n-keterampilan');
Route::get('/keterampilan/tambah', 'KeterampilanController@tambah')->name('tambah_keterampilan');
Route::post('/keterampilan/simpan','KeterampilanController@simpan');

//pengetahuan
Route::get('/pengetahuan' , 'PengetahuanController@index')->name('n-pengetahuan');
Route::get('/pengetahuan/tambah', 'PengetahuanController@tambah')->name('tambah_pengetahuan');
Route::post('pengetahuan/simpan', 'PengetahuanController@simpan');