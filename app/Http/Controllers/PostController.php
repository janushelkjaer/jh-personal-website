<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\Category;
use App\Http\Resources\CategoryResource;

class PostController extends Controller
{

    public function index()
    {
        $currentLocale = app()->getLocale();
        $posts = Post::where('title->' . $currentLocale, '!=', null)->get();
        $categories = Category::all()->sortBy('title');
        #dd($posts);
        return view('posts.index', [
            'posts' => PostResource::collection($posts),
            'categories' => CategoryResource::collection($categories)
        ]);
    }
    public function show($slug)
    {
        $currentLocale = app()->getLocale();
        $post = Post::where('slug->' . $currentLocale, $slug)->firstOrFail();   
        $categories = Category::all();
        return view('posts.show', [
            'post' => PostResource::make($post),
            'categories' => CategoryResource::collection($categories)
        ]);
    }
}
