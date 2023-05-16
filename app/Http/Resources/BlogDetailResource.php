<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BlogDetailResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "description" => $this->description,
            "created_at" => $this->created_at,
            "title" => $this->title,
            "img" => $this->img,
            "slug" => $this->slug,
            "author" => $this->user,
            "category" =>$this->category
        ];
    }
}
