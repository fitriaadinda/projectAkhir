<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KomentarController;

Route::get('/', [ArtikelController::class, 'index']);

//Admin Artikel
Route::get('/artikel', [ArtikelController::class, 'indexAdmin'])->middleware('auth');
Route::post('/artikel', [ArtikelController::class, 'prosesTambah'])->middleware('auth');
Route::put('/artikel/{id}', [ArtikelController::class, 'prosesUpdate'])->middleware('auth');
Route::delete('/artikel/{id}', [ArtikelController::class, 'prosesDelete'])->middleware('auth');

//Admin Komentar
Route::get('/komentar', [KomentarController::class, 'index'])->middleware('auth');
Route::delete('/komentar/{id}', [KomentarController::class, 'prosesDelete'])->middleware('auth');

//Admin Dashboard
Route::get('/admin', function () {
    return view('admin/home');
})->middleware('auth');

//Detail Artikel User
Route::get('/detail-artikel/{id}', [ArtikelController::class, 'detailArtikel']);
//Tambah Komentar
Route::post('/artikel/{id}/komentar', [KomentarController::class, 'prosesTambah']);

//Admin User
Route::get('/users', [UserController::class, 'index'])->middleware('auth');
Route::post('/users', [UserController::class, 'prosesTambah'])->middleware('auth');
Route::put('/users/{id}', [UserController::class, 'prosesUpdate'])->middleware('auth');
Route::delete('/users/{id}', [UserController::class, 'prosesDelete'])->middleware('auth');

//Login Logout
Route::get('/login', [LoginController::class, 'viewLogin']);
Route::post('/login', [LoginController::class, 'prosesLogin']);
Route::get('/logout', [LoginController::class, 'logout']);

