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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'MakananController@index')->name('/');

Route::get('/makanan/{makanan}', 'MakananController@show');
Route::delete('/makanan/{makanan}', 'MakananController@destroy');
Route::get('/makanan/{makanan}/edit', 'MakananController@edit');
Route::patch('/makanan/{makanan}', 'MakananController@update');

Route::post('check', 'MakananController@login_aksi')->name('auth.check');
Route::get('admin', 'MakananController@admin')->name('admin');
Route::get('form_tambah', 'MakananController@create')->name('form_tambah');
Route::post('admin', 'MakananController@store')->name('tambah');


Route::get('logout', 'MakananController@logout_aksi')->name('logout');
