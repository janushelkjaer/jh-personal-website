<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;

Route::get('/', [PageController::class, 'show'])->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::get('blog', [PostController::class, 'index'])->name('posts.index');
#Route::get('blog/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('blog/categories', function () {
    return redirect()->route('posts.index');
})->name('categories.index');
Route::get('blog/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('blog/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/{any?}', [PageController::class, 'show'])->where('any', '.*')->name('pages.show');


require __DIR__.'/auth.php';
