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
	Route::get('/admin/jadwal/kajian/{id}/edit','Admin\JadwalKajianController@edit')->name('admin.jadwal.kajian.edit');
	Route::put('/admin/jadwal/kajian/{id}/edit','Admin\JadwalKajianController@update')->name('admin.jadwal.kajian.update');
	Route::get('/admin/akuntansi/catatan-keuangan','Admin\CatatanKeuanganController@index')->name('admin.akuntansi.catatan-keuangan');
	Route::get('/admin/akuntansi/catatan-keuangan/create','Admin\CatatanKeuanganController@create')->name('admin.akuntansi.catatan-keuangan.create');
	Route::post('/admin/akuntansi/catatan-keuangan/store','Admin\CatatanKeuanganController@store')->name('admin.akuntansi.catatan-keuangan.store');
	Route::get('/admin/akuntansi/catatan-keuangan/{id}/edit','Admin\CatatanKeuanganController@edit')->name('admin.akuntansi.catatan-keuangan.edit');
	Route::put('/admin/akuntansi/catatan-keuangan/{id}/edit','Admin\CatatanKeuanganController@update')->name('admin.akuntansi.catatan-keuangan.update');
	Route::get('/admin/image', 'Admin\ImageController@index')->name('admin.image');
	Route::get('/admin/image/create', 'Admin\ImageController@create')->name('admin.image.create');
	Route::post('/admin/image/store', 'Admin\ImageController@store')->name('admin.image.store');
	Route::get('/admin/member', 'Admin\MemberController@index')->name('admin.member');
	Route::get('/admin/member/create', 'Admin\MemberController@create')->name('admin.member.create');
	Route::post('/admin/member/store', 'Admin\MemberController@store')->name('admin.member.store');
	Route::get('/admin/donation', 'Admin\DonationController@index')->name('admin.donation');
	Route::get('/admin/donation/create', 'Admin\DonationController@create')->name('admin.donation.create');
	Route::post('/admin/donation/store', 'Admin\DonationController@store')->name('admin.donation.store');
	Route::get('/admin/donation/{id}/edit', 'Admin\DonationController@edit')->name('admin.donation.edit');
	Route::put('/admin/donation/{id}/update', 'Admin\DonationController@update')->name('admin.donation.update');
});
Route::middleware(['auth'])->group(function(){
	Route::get('/admin/profile','admin\MosqueProfileController@index')->name('admin.profile.masjid');
	Route::post('/admin/profile/masjid/save', 'Admin\MosqueProfileController@save')->name('admin.profile.masjid.save');
});