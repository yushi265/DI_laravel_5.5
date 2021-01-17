<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Post $post) {
        $this->validate($request, [
            'body' => 'required'
        ]);
        $comment = new Comment(['body' => $request->body]);
        $post->comments()->save($comment);
        return redirect()->action('PostController@show', $post);
    }
}
