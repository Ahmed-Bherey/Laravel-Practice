<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function showpost(){
        $posts = Post::all();
        return view('enduser_welcome' , compact('posts'));
    }
}
