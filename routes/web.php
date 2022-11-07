<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontenController;
use App\Http\Controllers\AuthController;

Route::get('/kontens', [KontenController::class,'index'])
    ->name('kontens.index');
Route::get('/kontens/tambah', [KontenController::class,'tambah'])
    ->name('kontens.tambah');
Route::get('/kontens/showadmin', [KontenController::class,'admin'])
    ->name('kontens.showadmin');
Route::post('/kontens', [KontenController::class,'store'])
    ->name('kontens.store');
Route::get('/kontens/{konten}', [KontenController::class, 'show'])
    ->name('kontens.show');
Route::get('/kontens/{konten}/edit', [KontenController::class, 'edit'])
    ->name('kontens.edit');
Route::patch('/kontens/{konten}', [KontenController::class, 'update'])
    ->name('kontens.update');
Route::delete('/kontens/{konten}', [KontenController::class, 'destroy'])
    ->name('kontens.destroy');
Route::get('/download{konten}', [KontenController::class, 'download']);
Route::resource('konten', KontenController::class);
Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [KontenController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/about', [KontenController::class, 'about'])
    ->name('about');
