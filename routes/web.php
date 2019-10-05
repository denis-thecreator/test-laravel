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

//Test Form
Route::get('/formulir', 'PegawaiController@index');
Route::post('/formulir/proses', 'PegawaiController@store');

//Test Templating Blade
Route::get('/blog', 'BlogController@index');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//Test CRUD menggunakan Query Builder
Route::get('/pegawai', 'EmployeeController@index');