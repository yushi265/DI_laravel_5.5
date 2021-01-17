@extends('layouts.default')

@section('title', '{{ $post->title }}')

@section('content')

<h1>
    <a href="{{ url('/') }}" class="header-menu">back</a>
    {{ $post->title }}
</h1>
<p>
    {{ $post->body }}
</p>

<h2>Comment</h2>
<p>
    <ul>
        @forelse ($post->comments as $comment)
        <li>
            {{ $comment->body }}
        </li>
        @empty
        <li>
            No comments yet
        </li>
        @endforelse
    </ul>
</p>

<form action="{{ action('CommentController@store', $post)}}" method="post">
    {{ csrf_field() }}
    <p>
        <input type="text" name="body" placeholder="enter comment" value="{{ old('body')}}">
    </p>
    <p>
        <input type="submit" value="Add comment">
    </p>
</form>

@endsection
