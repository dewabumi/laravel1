<?php

use App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/daftar', 'DaftarController@index')->name('daftar');
Route::get('/daftar/form/{id}', 'DaftarController@daftarIni');
Route::get('hasil-pencarian/{slug}', 'DaftarController@methodBaru');
Route::post('/daftar/store', 'DaftarController@storeDaftar');


Route::get('cari', 'DaftarCont@index')->name('daftar');
Route::get('daftar', 'DaftarCont@show')->name('daftar.show');


// dropdowns
Route::post('/daftar/getOutlet/{id}', 'DaftarController@outlet');
Route::post('/daftar/getProgram/{id}', 'DaftarController@program');
Route::post('/form/pilihkecamatan/{id}', 'DaftarController@kecamatan');
Route::post('/form/pilihKelurahan/{id}', 'DaftarController@kelurahan');
