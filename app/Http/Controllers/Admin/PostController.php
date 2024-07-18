<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', Post::PUBLISHED)->orderBy('created_at','desc')->paginate(10);
        return view("posts.index", compact("posts"));
    }

    public function show(Post $post)
    {
        return view("posts.show", compact("post"));
    }
}
