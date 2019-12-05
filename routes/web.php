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
Route::put('/member/update/{id}', 'MemberController@update');
Route::get('/member/delete/{id}', 'MemberController@delete');

//Test Relasi OneToOne
Route::get('/customers', 'CustomersController@index');

//Test Relasi OneToMany
Route::get('articles', 'ArticlesController@index');

//Test Relasi ManyToMany
Auth::routes();
Route::get('/rewards', 'RewardsController@index');

//Belajar Enkripsi Laravel
Route::get('/enkripsi', 'JohnController@enkripsi');
Route::get('/data', 'JohnController@data');
Route::get('/data/{data_rahasia}', 'JohnController@data_proses');

Route::get('/home', 'HomeController@index')->name('home');

//belajar hash
Route::get('/hash', 'JohnController@hash');

//belajar upload files
Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@upload_proses');
Route::get('/upload/hapus/{id}', 'UploadController@hapus');

//belajar membuat session
Route::get('/session/tampil', 'JohnController@tampilkanSession');
Route::get('/session/buat', 'JohnController@buatSession');
Route::get('/session/hapus', 'JohnController@hapusSession');

//belajar membuat notif session
Route::get('/pesan', 'NotifController@index');
Route::get('/pesan/sukses', 'NotifController@sukses');
Route::get('/pesan/peringatan', 'NotifController@peringatan');
Route::get('/pesan/gagal', 'NotifController@gagal');

Route::get('/error/{nama}', 'JohnController@index');