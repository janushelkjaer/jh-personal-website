<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Builder;

class Service extends BaseModel
{
    use HasTranslations;
    protected $translatable = ['title', 'slug', 'content', 'seo', 'meta', 'description', 'short_description'];

    public function scopeBySortOrder(Builder $query): Builder
    {
        return $query->orderBy('order', 'asc');
    }
}
