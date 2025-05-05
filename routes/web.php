<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;


require __DIR__.'/auth.php';


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localize']
    ],
    function () {

        #dd(LaravelLocalization::getCurrentLocale());

        $locale = LaravelLocalization::getCurrentLocale();

        if ($locale == 'da') {
            Route::get('blog', [PostController::class, 'index'])->name('posts.index');
             Route::get('blog/kategorier/{category}', [CategoryController::class, 'show'])->name('categories.show');
            Route::get('blog/{post}', [PostController::class, 'show'])->name('posts.show');
        } else {
            Route::get('blog', [PostController::class, 'index'])->name('posts.index');
               Route::get('blog/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
               Route::get('blog/{post}', [PostController::class, 'show'])->name('posts.show');
        }


        Route::get('/', [PageController::class, 'show'])->name('home');

        // Route::get('blog', [PostController::class, 'index'])->name('posts.index');
        // #Route::get('blog/categories', [CategoryController::class, 'index'])->name('categories.index');
        // Route::get('blog/categories', function () {
        //     return redirect()->route('posts.index');
        // })->name('categories.index');
        // Route::get('blog/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
        // Route::get('blog/{post}', [PostController::class, 'show'])->name('posts.show');

        // Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
        Route::get('/{any?}', [PageController::class, 'show'])->where('any', '.*')->name('pages.show');
    }
);


