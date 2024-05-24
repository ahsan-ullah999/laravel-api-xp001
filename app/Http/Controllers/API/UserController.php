<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use App\Models\user;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('post')->get();
        return UserResource::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     * @param UserRequest $request
     */
    public function store(UserRequest $request)
    {
        return User::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = User::find($id);
        $users->update($request->all());
        return $users;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return User::destroy($id);
    }
   /**
     * search the specified resource from storage.
     * @param str $name
     * @return \Illuminate\Http\Response
     *
     */

    public function search($name)
    {
       return User::where('name', 'like', '%'.$name.'%')->get();
    }
}
