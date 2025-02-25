<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::post('/book/store', [BookController::class, 'store'])->name('book.store');
Route::PUT('/book/{id}', [BookController::class, 'update'])->name('book.update');
Route::get('/book/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
Route::get('/book/{id}', [BookController::class, 'destroy'])->name('book.destroy');
