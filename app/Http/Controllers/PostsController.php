<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index() {
        // $posts = \App\Post::all();
        // $posts = Post::orderby('created_at', 'desc')->get();
        $posts = Post::latest()->get();
        // $posts = [];
        // dd($posts->toArray());// dump die
        // return view('posts.index', ['posts' => $posts]);
        return view('posts.index')->with('posts', $posts);
    }

    public function show($id) {
        // $post = Post::find($id);
        $post = Post::findOrFail($id);
        return view('posts.show')->with('post', $post);
    }

}
