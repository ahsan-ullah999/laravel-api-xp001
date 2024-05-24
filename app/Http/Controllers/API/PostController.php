<?php

namespace App\Http\Controllers\API;
use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\PostRequest;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;


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
     * @param PostStoreRequest $request
     */
    public function store(PostStoreRequest $request)
    {




        return Post::create($request->all());

    }
    // public function store(PostRequest $request){
    //     'title';
    //     'tag';
    //     'description';
    //     'author';

    // }
    // class PostRequest extends Request{
    //     public function rules(){
    //         return[
    //             'title'=>'required',
    //             'tag'=>'required',
    //             'author'=>'required',

    //         ];
    //     }
    // }


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
       return Post::destroy($id);
    }

   /**
     * search the specified resource from storage.
     * @param str $title
     * @return \Illuminate\Http\Response
     *
     */

    public function search($title)
    {
       return Post::where('title', 'like', '%'.$title.'%')->get();
    }

}
