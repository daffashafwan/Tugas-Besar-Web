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
Route::get('/upload', 'UploadController@upload');
Route::get('/landing', function(){
	return view('landing');
});

Route::get('/profil/{id}','ProfilController@index');
Route::get('/profil/edit/{id}','ProfilController@edit');
Route::post('/profil/update','ProfilController@update');

Route::get('/photo', 'PhotoController@show');
Route::get('/photo/cari','PhotoController@cari');
//Route::resource('/upload', 'UploadController');
Route::get('upload/{id}', 'UploadController@hapus');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


