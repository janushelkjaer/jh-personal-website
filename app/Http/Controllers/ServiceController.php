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
use App\Models\Service;
use App\Http\Resources\ServiceResource;

class ServiceController extends Controller
{
    public function show($slug = '')
    {
        $service = Service::where('slug->' . app()->currentLocale(), $slug)->firstOrFail();

        #dd($service);

        return view('pages.show', [
            'page' => ServiceResource::make($service)
        ]);
    }
}
