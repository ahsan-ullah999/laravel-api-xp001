<?php

namespace App\Http\Controllers\API;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;


class PostController extends Controller
{



    /**
     * Display a listing of the resource.
     */
    public function index()
    {

            $posts = Post::with('user')->get();
            return PostResource::collection($posts);

            return Post::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'title'=>'required',
           'author'=>'required',
        ]);



        return Post::create($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Post::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $posts = Post::find($id);
        $posts->update($request->all());
        return $posts;


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
