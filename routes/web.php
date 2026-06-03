<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function() {
    return "<h1> Halo, Selamat datang</h1> di tutorial Laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function() {
    return view ('blog');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('menu', [MenuController::class, 'index']);
Route::get('contoh', [MenuController::class, 'contoh']);
Route::get('intro', [MenuController::class, 'intro']);
Route::get('layout', [MenuController::class, 'layout']);
Route::get('news', [MenuController::class, 'news']);
Route::get('news1', [MenuController::class, 'news1']);
Route::get('responsive', [MenuController::class, 'responsive']);
Route::get('template', [MenuController::class, 'template']);
Route::get('indx', [MenuController::class, 'index']);
Route::get('linktree', [MenuController::class, 'linktree']);
Route::get('pert6', [MenuController::class, 'pert6']);
Route::get('pert5', [MenuController::class, 'pert5']);

//route CRUD
Route::get('/pegawai',[PegawaiDBController::class, 'index2']);
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);
