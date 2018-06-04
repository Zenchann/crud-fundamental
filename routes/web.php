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

// Route Kelas
Route::get('kelas','KelasController@index')->name('kelas.index');
Route::get('kelas/create','KelasController@create')->name('kelas.create');
Route::post('kelas','KelasController@store')->name('kelas.store');
Route::get('kelas/{kelas}/edit','KelasController@edit')->name('kelas.edit');
Route::match(['put', 'patch'],'kelas/{kelas}','KelasController@update')->name('kelas.update');
Route::get('kelas/{kelas}','KelasController@show')->name('kelas.show');
Route::delete('kelas/{kelas}','KelasController@destroy')->name('kelas.destroy');