<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends BaseModel
{
    use HasTranslations;
    protected $translatable = ['title', 'slug', 'content', 'seo', 'meta', 'description', 'short_description'];
}
