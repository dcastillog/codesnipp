<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\User as UserResource; 
use App\Http\Resources\File as FileResource; 
use App\Http\Resources\Tag as TagResource; 

class Snippet extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'user' => UserResource::make($this->user),
            'files_count' => $this->files()->count(),
            'files' => FileResource::collection($this->files),
            'tags' => TagResource::collection($this->tags),
            'ago' => $this->created_at->diffForHumans(),
        ];
    }
}
