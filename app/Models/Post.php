<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use OpenAI\Laravel\Facades\OpenAI;

class Post extends BaseModel
{
    use HasTranslations;

    protected $translatable = ['title', 'slug', 'content', 'short_description', 'seo', 'meta', 'intro', 'excerpt', 'summary', 'what_you_will_learn', 'key_takeaways', 'references'];

    protected $dates = [
        'published_at'
    ];

    protected $casts = [
        'key_takeaways' => 'array',
        'published_at' => 'datetime',
        'what_you_will_learn' => 'array',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_post', 'post_id', 'category_id');
    }  


    public function generateFeaturedImage($prompt = '?')
    {


        $promptPrefix = "Drawing illustrating the concept of ";
        $promptSuffix = ". No shading, no shadow. Aspect ratio 16:9, no shading. Size should be wide.";

        $result = OpenAI::images()->create([
            'model' => 'dall-e-3',
            //'prompt' => 'Create black and white coloring pages. No shading, no shadow. Aspect ratio 1:1, no shading. Size should be tall. A cartoon style illustration of ' . $this->prompt,
            'prompt' => $promptPrefix . $prompt . $promptSuffix,
            'n' => 1,
            #'size' => '1024x1024', // 512x512
            'response_format' => 'url',
        ]);


        #dd($result->data[0]->url);

        $this->addMediaFromUrl($result->data[0]->url)->toMediaCollection('posts');

        // foreach ($result->data as $image) {
        //     $page->addMediaFromUrl($result->data[0]->url)->toMediaCollection('posts');
        // }

        #$page->addMediaFromUrl($result->data[0]->url)->toMediaCollection('images');

       # $this->imageUrl = $result->data[0]->url;

       # $this->featured_image = $this->getMedia('featured_image')->first();
    }
    
}
