<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

    Route::get('blog', [PostController::class, 'index'])->name('posts.index');
    Route::get('blog/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/{any?}', [PageController::class, 'show'])->where('any', '.*')->name('pages.show');

require __DIR__.'/auth.php';
