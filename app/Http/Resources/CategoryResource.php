<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\PostResource;
class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'seo' => $this->seo,
            'meta' => $this->meta,
            'posts' => PostResource::collection($this->posts),
            'subCategories' => CategoryResource::collection($this->subCategories),
            'parentCategory' => new CategoryResource($this->parentCategory),    
        ];
    }
}
