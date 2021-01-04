<?php

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

Route::get('/', 'Frontend\HomeController@index');
Route::get('/home', 'Frontend\HomeController@index')->name('home');
Route::get('/sejarah', 'Frontend\SejarahController@index')->name('sejarah');
Route::get('/visimisi', 'Frontend\VisimisiController@index')->name('visimisi');
Route::get('/sambutan', 'Frontend\SambutanController@index')->name('sambutan');
Route::get('/struktur', 'Frontend\StrukturController@index')->name('struktur');
Route::get('/agenda', 'Frontend\AgendaController@index')->name('agenda');
Route::get('/galeri', 'Frontend\GaleriController@index')->name('galeri');
Route::get('/download', 'Frontend\DownloadController@index')->name('download');
Route::get('/download/{file}', 'Frontend\DownloadController@ambil')->name('download.ambil');
Route::get('/blog', 'Frontend\BlogController@index')->name('blog');
Route::get('/blog/{slug}', 'Frontend\BlogController@show')->name('blog.show');
Route::resource('/kontakfront', 'Frontend\KontakFrontController');

Auth::routes();
Route::redirect('/register', '/login', 301);

Route::group(['middleware' => ['auth']], function () {
    Route::resource('/admin/dashboard', 'Admin\DashboardController');
    Route::resource('/admin/sejarah', 'Admin\SejarahController');
    Route::resource('/admin/visimisi', 'Admin\VisiMisiController');
    Route::resource('/admin/sambutan', 'Admin\SambutanController');
    Route::resource('/admin/struktur', 'Admin\StrukturController');
    Route::resource('/admin/agenda', 'Admin\AgendaController');
    Route::resource('/admin/kontak', 'Admin\KontakController');
    Route::resource('/admin/kategori', 'Admin\KategoriController');
    Route::resource('/admin/post', 'Admin\PostController');
    Route::resource('/admin/galeri', 'Admin\GaleriController');
    Route::resource('/admin/user', 'Admin\UserController');
    Route::resource('/admin/setting', 'Admin\SettingController');
    Route::resource('/admin/download', 'Admin\DownloadController');
    Route::resource('/admin/banner', 'Admin\BannerController');
});
