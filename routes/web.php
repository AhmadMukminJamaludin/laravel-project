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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/buku', 'BukuController@index')->name('buku');

Route::get('/buku/form_tambah_buku', 'BukuController@FormAddBuku');

Route::get('/buku/form_edit_buku/{id}', 'BukuController@FormEditBuku');

Route::post('/buku/tambah_buku', 'BukuController@addBuku');

Route::get('/buku/hapus_buku/{id}', 'BukuController@deleteBuku');

Route::post('/buku/edit_buku', 'BukuController@EditBuku');

Route::resource('/pengunjung', 'PengunjungController');
