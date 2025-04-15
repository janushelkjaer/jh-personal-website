<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');


Route::get('/{any?}', [PageController::class, 'show'])->where('any', '.*')->name('pages.show');

require __DIR__.'/auth.php';
