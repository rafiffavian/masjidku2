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
// Route::get('/' , 'IndexController@manggilIndex');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('HomeController');
Route::middleware(['auth','dkm'])->group(function(){
	Route::get('/home', 'HomeController@index')->name('home');
});
Route::middleware(['auth'])->group(function(){
	Route::get('/admin/profile','admin\MosqueProfileController@index')->name('admin.profile.masjid');
});