<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index',compact('posts'));
    }
    public function show($slug)
    {
        $post = Post::whereSlug($slug)
            ->with('user:id,name','comments.replies','user:id,name','comments.user:id,name','comments.replies.user:id,name')
            ->first();

//        dd($post->toArray());

        return view('posts.show', compact('post'));
    }
}
