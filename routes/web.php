<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;
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
    return view('welcome');
})->name('loginView');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::post('/login',[AuthController::class,'login'])->name('login');
Route::post('/logout/user',[AuthController::class,'logout'])->name('logout');

Route::get('/mahasiswa',[MahasiswaController::class,'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/create',[MahasiswaController::class,'create'])->name('mahasiswa.create');
Route::post('/mahasiswa/create',[MahasiswaController::class,'store'])->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{id}',[MahasiswaController::class,'edit'])->name('mahasiswa.edit');
Route::put('/mahasiswa/edit/{id}',[MahasiswaController::class,'update'])->name('mahasiswa.update');
Route::delete('/mahasiswa/{id}',[MahasiswaController::class,'destroy'])->name('mahasiswa.destroy');
Route::get('/mahasiswa/print/data',[MahasiswaController::class,'print'])->name('mahasiswa.print');
Route::get('/mahasiswa/search',[MahasiswaController::class,'search'])->name('mahasiswa.search');