<?php

namespace App\Http\Resources;

use Clockwork\Request\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BlogResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            "id" => $this->id,
            "description" => $this->description,
            "created_at" => $this->created_at,
            "title" => $this->title,
            "img" => $this->img,
            "slug" => $this->slug,
        ];
    }
}
