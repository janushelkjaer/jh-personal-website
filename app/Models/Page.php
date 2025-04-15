<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Page extends BaseModel
{
    use HasTranslations;
    protected $translatable = ['title', 'slug', 'content', 'seo', 'meta'];
}
