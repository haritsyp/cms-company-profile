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

Route::get('/', 'frontController@index');
Route::get('/about', 'frontController@about');
Route::get('/service', 'frontController@layanan');
Route::get('/service/{id}', 'frontController@deskripsi');
Route::get('/blog', 'frontController@blog');
Route::get('/blog/read/{id}', 'frontController@read');
Route::get('/kontak', 'frontController@kontak');
Route::get('/gallery', 'frontController@galeri');


Route::group(['middleware' => ['auth']], function() {
	Route::resource('admin/user','UserController');
	Route::resource('admin/kategori','KategoriController');
	Route::resource('admin/artikel','ArtikelController');
	Route::resource('admin/profil','TentangController');
	Route::resource('admin/layanan','LayananController');
	Route::resource('admin/konfigurasi','KonfigurasiController');
	Route::resource('admin/partner','PartnerController');
	Route::resource('admin/galeri','GaleriController');
	Route::get('admin/dashboard','StatistikController@index');
	Route::get('api/statistik','StatistikController@getStatistik');
});

Route::get('/admin', function(){
	return redirect('login');
});

Route::get('/api/galeri','GaleriController@getGaleri');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::get('/api/counter','StatistikController@counter');
