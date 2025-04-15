<?php

namespace App\Http\Controllers;

use App\Http\Resources\ModuleResource;
use App\Http\Resources\PageResource;
use App\Http\Resources\PostCollectionResource;
use App\Http\Resources\PostResource;
use App\Models\Module;
use App\Models\Page;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class PageController extends Controller
{
    public function show($slug = 'home')
    {
        $page = Page::where('slug->' . app()->currentLocale(), $slug)->firstOrFail();

        return view('pages.show', [
            'page' => PageResource::make($page)
        ]);
    }
}
