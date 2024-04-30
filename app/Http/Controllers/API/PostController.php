<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{



    /**
     * Display a listing of the resource.
     */
    public function index()
    {

            $posts = Post::with('user')->get();
            return PostResource::collection($posts);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Post::create([
            'title'=> $request->title,
             'tag'=> $request->tag,
             'description'=> $request->description,
             'author'=> $request->author,

        ]);
        return response()->json( 201);
        // $posts= new Post();
        // $posts->title = $request->input('title');
        // $posts->tag = $request->input('tag');
        // $posts->description = $request->input('description');
        // $posts->author = $request->input('author');
        // $posts->save();


        // return response()->json($posts, 201);




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function post_update(Request $request, Post $id)
    {

        //  $posts= Post::find($id)-> $request->all();
        //  $posts->title= $request->title;
        //  $posts->tag= $request->tag;
        //  $posts->description= $request->description;
        //  $posts->author= $request->author;



        //      if($request->id){
        //        return response()->json( 201);
        //      }else{
        //        return response()->json("error", 404);
        //      }







        //    $posts= $request->all();
        //    $model=Post::find($id);
        //    if($model){
        //       $model->update($posts);
        //        return response()->json($model,200);

        //    }else{
        //        return response()->json(['error'=>'resource not found'],404);


        //    }








        // Post::find($id)->update([
        //    'title'=> $request->title,
        //    'tag'=> $request->tag,
        //    'description'=> $request->description,
        //    'author'=> $request->author,

        //    ]);
        //    return response()->json( 201);





             $posts= Post::find($request->$id);
             $posts->title= $request->title;
             $posts->tag= $request->tag;
             $posts->description= $request->description;
             $posts->author= $request->author;
             $result= $posts->save();

             if($result){
               return response()->json( 201);
             }else{
              return response()->json(['error'=>'resource not found'],404);
             }





    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
