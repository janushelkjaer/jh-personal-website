<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        #dd($posts);
        return view('posts.index', [
            'posts' => PostResource::collection($posts)
        ]);
    }
    public function show($slug)
    {
        $currentLocale = app()->getLocale();
        $post = Post::where('slug->' . $currentLocale, $slug)->firstOrFail();
        return view('posts.show', [
            'post' => PostResource::make($post)
        ]);
    }
}
