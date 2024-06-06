<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route untuk mendapatkan semua buku
Route::get('/books', [ApiController::class, 'getBooks'])->name('books');

// Route untuk mendapatkan buku berdasarkan ID
Route::get('/books/{id}', [ApiController::class, 'getBook'])->name('book.show');

// Route untuk membuat buku baru
Route::post('/books', [ApiController::class, 'createBook'])->name('book.create');

// Route untuk memperbarui buku berdasarkan ID
Route::put('/books/{id}', [ApiController::class, 'updateBook'])->name('book.update');

// Route untuk menghapus buku berdasarkan ID
Route::delete('/books/{id}', [ApiController::class, 'deleteBook'])->name('book.delete');
