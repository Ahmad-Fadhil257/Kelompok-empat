<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\AboutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/Kategori', [KategoriController::class, 'index'])->name('Kategori');
Route::get('/Buku', [BukuController::class, 'index'])->name('Buku');
Route::get('/Member', [MemberController::class, 'index'])->name('Member');
Route::get('/Peminjaman', [PeminjamanController::class, 'index'])->name('Peminjaman');
Route::get('/About', [AboutController::class, 'index'])->name('About');
