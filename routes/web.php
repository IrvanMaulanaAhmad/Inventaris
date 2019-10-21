<?php

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

use App\BarangKeluar;

Auth::routes();

Route::middleware('auth')->group(function(){

    // Dashboard
    Route::get('/', 'DashboardController')->name('dashboard');

    // suplier
    Route::get('/suplier', 'SuplierController@index')->name('suplier.index');
    Route::get('/suplier/create', 'SuplierController@create')->name('suplier.create');
    Route::post('/suplier/store', 'SuplierController@store')->name('suplier.store');
    Route::get('/suplier/{id}/edit', 'SuplierController@edit')->name('suplier.edit');
    Route::patch('/suplier/{id}/update', 'SuplierController@update')->name('suplier.update');
    Route::delete('/suplier/{id}/delete','SuplierController@destroy')->name('suplier.destroy');

    // barang
    Route::get('/barang', 'BarangController@index')->name('barang.index');
    Route::get('/barang/{id}/show', 'BarangController@show')->name('barang.show');
    Route::get('/barang/create', 'BarangController@create')->name('barang.create');
    Route::post('/barang/store', 'BarangController@store')->name('barang.store');
    Route::get('/barang/{id}/edit', 'BarangController@edit')->name('barang.edit');
    Route::get('/barang/{id}/editKondisi', 'BarangController@editKondisi')->name('barang.editKondisi');
    Route::patch('/barang/{id}/update', 'BarangController@update')->name('barang.update');
    Route::patch('/barang/{id}/updateKondisi', 'BarangController@updateKondisi')->name('barang.updateKondisi');
    Route::delete('/barang/{id}/delete','BarangController@destroy')->name('barang.destroy');

    // barang Masuk
    Route::get('/barangMasuk', 'BarangMasukController@index')->name('barangMasuk.index');
    Route::get('/barangMasuk/create', 'BarangMasukController@create')->name('barangMasuk.create');
    Route::post('/barangMasuk/store', 'BarangMasukController@store')->name('barangMasuk.store');
    Route::get('/barangMasuk/{id}/edit', 'BarangMasukController@edit')->name('barangMasuk.edit');
    Route::patch('/barangMasuk/{id}/update', 'BarangMasukController@update')->name('barangMasuk.update');
    Route::delete('/barangMasuk/{id}/delete', 'BarangMasukController@destroy')->name('barangMasuk.destroy');

    // Barang Keluar
    Route::get('/barangKeluar', 'BarangKeluarController@index')->name('barangKeluar.index');
    Route::get('/barangKeluar/create', 'BarangKeluarController@create')->name('barangKeluar.create');
    Route::post('/barangKeluar/store', 'BarangKeluarController@store')->name('barangKeluar.store');
    Route::get('/barangKeluar/{id}/edit', 'BarangKeluarController@edit')->name('barangKeluar.edit');
    Route::patch('/barangKeluar/{id}/update', 'BarangKeluarController@update')->name('barangKeluar.update');
    Route::delete('/barangKeluar/{id}/delete', 'BarangKeluarController@destroy')->name('barangKeluar.destroy');

    // Cetak PDF Barang
    //Route::get('/barang', 'BarangController@index')->name('barang.index');
    Route::get('/barang/cetak_pdf', 'BarangController@cetak_pdf')->name('cetak_pdf.index');

});
