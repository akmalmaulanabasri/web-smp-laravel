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

Route::get('/', function () {
    return view('home' , ['page' => 'Home']);
});

Route::get('/artikel', function () {
    return view('artikel' , ['page' => 'Artikel']);
});

Route::get('/kontak', function () {
    return view('kontak' , ['page' => 'Kontak']);
});

Route::get('/galeri', function () {
    return view('galeri' , ['page' => 'Galeri']);
});

