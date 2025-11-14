<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

// Halaman utama
Route::get('/', [BlogController::class, 'welcome'])->name('welcome');

// Halaman welcome (opsional — bisa hapus jika tidak perlu)
Route::get('/welcome', [BlogController::class, 'welcome']);

// Halaman home → menampilkan semua postingan
Route::get('/home', [BlogController::class, 'home'])->name('home');

// Halaman detail postingan
Route::get('/posts/{id}', [BlogController::class, 'show'])->name('posts.show');

// Halaman about (jika ada method about)
Route::get('/about', [BlogController::class, 'about'])->name('about');
