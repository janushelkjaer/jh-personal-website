<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Post extends BaseModel
{
    use HasTranslations;

    protected $translatable = ['title', 'slug', 'content', 'short_description', 'seo', 'meta', 'body'];

    protected $dates = [
        'published_at'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
