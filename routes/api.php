<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// function(){
//     $posts = Post::get();
//     return response()->json($posts);

// }


Route::get('/posts',[PostController::class,'index']);
Route::post('/posts',[PostController::class,'store'])->name('post.store');
Route::put('/posts',[PostController::class,'update'])->name('post_update');











