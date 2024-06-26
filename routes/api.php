<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\Controller;


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
// Route::resource('users',UserController::class);
Route::get('/users',[UserController::class,'index']);
Route::post('/users',[UserController::class,'store']);
Route::patch('/users',[UserController::class,'update']);
Route::delete('/users',[UserController::class,'delete']);
Route::get('/users/search/{name}',[UserController::class,'search']);



/* Route::resource('posts',PostController::class);*/
Route::get('/posts',[PostController::class,'index']);

Route::post('/posts',[PostController::class,'store']);
Route::patch('/posts/{post}',[PostController::class,'update']);
Route::delete('/posts/{Post}',[PostController::class,'destroy']);
Route::get('/posts/search/{title}',[PostController::class,'search']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});












