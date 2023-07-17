<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RplController;
use App\Http\Controllers\RplModelController;

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

Route::get('/welcome', function () {/*kosong*/
    return view('welcome');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');/*name home*/
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

// Route::get('/', 'BookController@index')->name('books.index');//books, books,index

Route::get('tb_rpl/tampil', [RplController::class, 'tampilrpl'])->name('tampilrpl')->middleware('auth');
Route::get('tb_rpl/tambah', [RplController::class, 'tambahrpl'])->name('tambahrpl')->middleware('auth');
Route::post('tb_rpl/simpan', [RplController::class, 'simpanrpl'])->name('simpanrpl')->middleware('auth');
Route::get('tb_rpl/ubah/{id_siswa}', [RplController::class, 'ubahrpl'])->name('ubahrpl')->middleware('auth');
Route::post('tb_rpl/update', [RplController::class, 'updaterpl'])->name('updaterpl')->middleware('auth');
Route::get('tb_rpl/hapus/{id_siswa}', [RplController::class, 'hapusrpl'])->name('hapusrpl')->middleware('auth');
Route::get('/showrpl', 'RplController@index')->name('showrpl');