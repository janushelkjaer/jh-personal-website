<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;
class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all()->sortBy('title');
        return view('posts.categories', [
            'categories' => CategoryResource::collection($categories)
        ]);
    }
    public function show($slug)
    {
        $currentLocale = app()->getLocale();
        $category = Category::where('slug->' . $currentLocale, $slug)->firstOrFail();
        $categories = Category::all()->sortBy('title');

        #dd($category->posts());

        return view('posts.index', [
            'category' => CategoryResource::make($category),
            'posts' => PostResource::collection($category->posts),
            'categories' => CategoryResource::collection($categories)
        ]);
    }
}
