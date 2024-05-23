<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $casts = [
       'description'=>'array'
    ];
    protected $fillable = [

        'title',
        'topic',
        'description',
        'author',

    ];

    public function comments(){
        return $this-> hasMany(Comment::class, 'post_id');

    }
    public function users()
    {
        return $this-> belongsToMany(User::class, 'post_user', 'post_id', 'user_id');
    }






}

