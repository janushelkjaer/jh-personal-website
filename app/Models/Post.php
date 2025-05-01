<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends BaseModel
{
    use HasTranslations;

    protected $translatable = ['title', 'slug', 'content', 'short_description', 'seo', 'meta', 'body', 'excerpt', 'summary', 'what_you_will_learn', 'key_takeaways', 'references'];

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
    
}
