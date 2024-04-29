<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }

    // public function post_store(Request $request){
    //     $this->postJson(route('post.store'),['title'=> $request->title])->assertCreated();
    //     $this->assertDatabaseHas('posts',['title'=>$request->title]);
    // }
}
