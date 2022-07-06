<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DashboardController;

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
})->name('home');

Route::get('/artikel', function () {
    return view('artikel' , ['page' => 'Artikel']);
})->name('artikel');

Route::get('/galeri', function () {
    return view('galeri' , ['page' => 'Galeri']);
})->name('galeri');

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kirim-pesan', [KontakController::class, 'create'])->name('kirim-pesan');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login-acc', [LoginController::class, 'login'])->name('login-acc')->middleware('guest');
Route::get('/register', [LoginController::class, 'store'])->name('register')->middleware('guest');
Route::post('/register-acc', [LoginController::class, 'create'])->name('register-acc')->middleware('guest');

Route::get('/logout', function() {
    Auth::logout();
    return redirect()->route('login');
})->name('logout')->middleware('auth');

Route::get('/home', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');