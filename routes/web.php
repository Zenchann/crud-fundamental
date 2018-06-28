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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']], 
function () {
    Route::resource('siswa','SiswaController');
    Route::resource('kelass','KelasController');
    Route::resource('kategori','KategoriController');
    Route::resource('artikel','ArtikelController');
    Route::post('artikel/{publish}', 'ArtikelController@Publish')->name('artikel.publish');
    Route::resource('file','FileController'); 
});

Route::get('blog','PklController@blog');
Route::get('blog/{id}', array('as' => 'singleblog', 'uses' =>'PklController@singleblog'));
