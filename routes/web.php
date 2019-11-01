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
Route::get('/pegawai/add', 'EmployeeController@create');
Route::post('/pegawai/store', 'EmployeeController@store');
Route::get('/pegawai/edit/{id}', 'EmployeeController@edit');
Route::post('/pegawai/update', 'EmployeeController@update');
Route::get('/pegawai/delete/{id}', 'EmployeeController@destroy');
Route::get('/pegawai/cari', 'EmployeeController@cari');

//Test CRUD menggunakan Eloquent
Route::get('/member', 'MemberController@index');
Route::get('/member/tambah', 'MemberController@tambah');
Route::post('/member/store', 'MemberController@store');
Route::get('/member/edit/{id}', 'MemberController@edit');