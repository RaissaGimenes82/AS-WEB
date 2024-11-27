<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\LivroController;

Route::get('livros', [LivroController::class, 'index'])
->middleware(['auth', 'verified'])->name('index-livro');
Route::get('livros/create', [LivroController::class, 'create'])
->middleware(['auth', 'verified'])->name('create-livro');
Route::post('livros', [LivroController::class, 'store'])
->middleware(['auth', 'verified'])->name('store-livro');
Route::get('livros/{id}/edit', [LivroController::class, 'edit'])
->middleware(['auth', 'verified'])->name('edit-livro');
Route::put('livros/{id}', [LivroController::class, 'update'])
->middleware(['auth', 'verified'])->name('update-livro');
Route::delete('livros/{id}', [LivroController::class, 'destroy'])
->middleware(['auth', 'verified'])->name('destroy-livro');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
