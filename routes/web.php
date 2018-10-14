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
    return view('welcome');
});

// Route::get('/{a}/{b}', 'IndexController@index');
Route::get('view', 'IndexController@manggilView');
Route::get('nilai', 'IndexController@manggilNilai');
Route::get('nilai2/{a}/{b}/{c}', 'IndexController@manggilNilai2');
Route::get('/' , 'IndexController@manggilIndex');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('HomeController');
Route::middleware(['auth','dkm'])->group(function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/admin/jadwal/shalat-jumat','Admin\JadwalShalatJumatController@index')->name('admin.jadwal.shalat-jumat');
	Route::get('/admin/jadwal/shalat-jumat/create','Admin\JadwalShalatJumatController@create')->name('admin.jadwal.shalat-jumat.create');
	Route::post('/admin/jadwal/shalat-jumat/store','Admin\JadwalShalatJumatController@store')->name('admin.jadwal.shalat-jumat.store');
	Route::get('/admin/jadwal/shalat-jumat/{id}/edit','Admin\JadwalShalatJumatController@edit')->name('admin.jadwal.shalat-jumat.edit');
	Route::put('/admin/jadwal/shalat-jumat/{id}/edit','Admin\JadwalShalatJumatController@update')->name('admin.jadwal.shalat-jumat.update');
	Route::get('/admin/jadwal/kajian', 'Admin\JadwalKajianController@index')->name('admin.jadwal.kajian');
	Route::get('/admin/jadwal/kajian/create', 'Admin\JadwalKajianController@create')->name('admin.jadwal.kajian.create');
	Route::post('/admin/jadwal/kajian/store', 'Admin\JadwalKajianController@store')->name('admin.jadwal.kajian.store');
	// Route::get('/admin/jadwal/kajian');
});
Route::middleware(['auth'])->group(function(){
	Route::get('/admin/profile','admin\MosqueProfileController@index')->name('admin.profile.masjid');
	Route::post('/admin/profile/masjid/save', 'Admin\MosqueProfileController@save')->name('admin.profile.masjid.save');
});