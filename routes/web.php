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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index', [
        "judul" => "Home"
    ]);
});

Route::get('/periode', function () {
    return view('periode', [
        "judul" => "Periode"
    ]);
});

Route::get('/kuis', function () {
    return view('kuis', [
        "judul" => "Kuesioner"
    ]);
});

Route::get('/hitung', function () {
    return view('hitung', [
        "judul" => "Hitung"
    ]);
});

Route::get('/tambah', function () {
    return view('kuesioner/tambah', [
        "judul" => "Hitung"
    ]);
});
