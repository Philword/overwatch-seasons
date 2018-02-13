<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $posts = Post::all();
        return view('posts.show', compact('posts'));
    }
}
