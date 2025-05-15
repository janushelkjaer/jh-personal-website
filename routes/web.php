<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
#use Spatie\ResponseCache\Middlewares\CacheResponse;

require __DIR__.'/auth.php';



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        //'middleware' => ['localize']
    //     'middleware' => [
    //     CacheResponse::class
    // ]
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    function () {


        $locale = LaravelLocalization::getCurrentLocale();

        if ($locale == 'da') {
            Route::get('/', [PageController::class, 'show'])->name('home');
             Route::get('blog/kategorier/{category}', [CategoryController::class, 'show'])->name('categories.show');

             Route::get('/ydelser/{service}', [ServiceController::class, 'show'])->name('services.show');
        } else {
            Route::get('/', [PageController::class, 'show'])->name('home');

               Route::get('blog/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
               Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
        }

        Route::get('blog', [PostController::class, 'index'])->name('posts.index');
        Route::get('blog/{post}', [PostController::class, 'show'])->name('posts.show');
        Route::get('/{any?}', [PageController::class, 'show'])->where('any', '.*')->name('pages.show');

       #Route::contentBlocks();

    }
);


