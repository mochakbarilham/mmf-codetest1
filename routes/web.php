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

Route::get('/', function () {
    return view('home.content');
})->name('home');

Route::prefix('master')->name('master.')->group(function(){
    Route::prefix('satuan')->name('satuan.')->group(function(){
        Route::get('/', 'Master\MasterSatuanController@index')->name('index');
        Route::post('/', 'Master\MasterSatuanController@store')->name('store');
        Route::post('/edit', 'Master\MasterSatuanController@edit')->name('edit');
        Route::post('/delete', 'Master\MasterSatuanController@delete')->name('delete');
        Route::get('/get-table', 'Master\MasterSatuanController@getDatatable')->name('get-table');
    });

    Route::prefix('barang')->name('barang.')->group(function(){
        Route::get('/', 'Master\MasterBarangController@index')->name('index');
        Route::post('/', 'Master\MasterBarangController@store')->name('store');
        Route::post('/edit', 'Master\MasterBarangController@edit')->name('edit');
        Route::post('/delete', 'Master\MasterBarangController@delete')->name('delete');
        Route::get('/get-table', 'Master\MasterBarangController@getDatatable')->name('get-table');
    });

    Route::prefix('merk')->name('merk.')->group(function(){
        Route::get('/', 'Master\MasterMerkController@index')->name('index');
        Route::post('/', 'Master\MasterMerkController@store')->name('store');
        Route::post('/edit', 'Master\MasterMerkController@edit')->name('edit');
        Route::post('/delete', 'Master\MasterMerkController@delete')->name('delete');
        Route::get('/get-table', 'Master\MasterMerkController@getDatatable')->name('get-table');
    });
});

Route::prefix('single-invoice')->name('single-invoice.')->group(function(){
    Route::get('/', 'SingleInvoiceController@index')->name('index');
    Route::post('/', 'SingleInvoiceController@store')->name('store');
    Route::post('/delete', 'SingleInvoiceController@delete')->name('delete');
    Route::get('/get-table', 'SingleInvoiceController@getDatatable')->name('get-table');
    Route::prefix('select2')->name('select2.')->group(function(){
        Route::post('barang', 'SingleInvoiceController@getBarang')->name('barang');
        Route::post('merk', 'SingleInvoiceController@getMerk')->name('merk');
        Route::post('satuan', 'SingleInvoiceController@getSatuan')->name('satuan');
    });
});
