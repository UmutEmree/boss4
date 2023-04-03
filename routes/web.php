<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
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
Route::get('dil/{locale}','LangController@index');

Route::get('/', 'PagesController@index')->name('home');
Route::get('proje', 'PagesController@project')->name('project');
Route::get('hakkimizda', 'PagesController@about')->name('about');
Route::get('basinda-biz', 'PagesController@press')->name('press');
Route::get('yonetim-kurulu', 'PagesController@management')->name('yonetim-kurulu');
Route::get('reklam-filmleri', 'PagesController@video')->name('video');
Route::get('baskanin-mesaji', 'PagesController@presidentMessage')->name('baskanin-mesaji');
Route::get('kisisel-verilere-iliskin-aydinlatma-metni', 'PagesController@aydinlatma')->name('aydinlatma');
Route::get('gizlilik-politikasi', 'PagesController@gizlilik')->name('gizlilik');
Route::get('insan-kaynaklari-politikamiz', 'PagesController@insanKaynaklari')->name('insanKaynaklari');
Route::get('/projeler/{slug}', 'PagesController@projects')->name('projects');
Route::get('/yonetim-kurulu/{slug}', 'PagesController@managementDetail')->name('managementDetail');
Route::get('/bizden-haberler', 'PagesController@news')->name('news');
Route::get('/haberler/{slug}', 'PagesController@newsDetail')->name('newsDetail');
Route::get('/proje/{slug}', 'PagesController@projectDetail')->name('projectDetail');
Route::get('galeri', 'PagesController@gallery')->name('gallery');
Route::get('iletisim', 'PagesController@contact')->name('contact');
Route::post('/iletisim', 'PagesController@contactsend')->name('iletisim');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
