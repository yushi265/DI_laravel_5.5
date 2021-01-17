@extends('layouts.default')

@section('title', $post->title)

@section('content')

<h1>
    <a href="{{ url('/') }}" class="header-menu">back</a>
    {{ $post->title }}
</h1>
<p>
    {!! nl2br(e($post->body)) !!}
</p>

<h2>Comments</h2>
<p>
    <ul>
        @forelse ($post->comments as $comment)
        <li>
            {{ $comment->body }}
            <a href="#" class="del" data-id="{{$comment->id}}">[x]</a>
            <form action="{{ action('CommentController@destroy', [$post, $comment])}}" method="post" id="form_{{ $comment->id
            }}">
                {{ csrf_field() }}
                {{ method_field('delete') }}
            </form>
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
        @if($errors->has('body'))
            <span class="error">
                {{ $errors->first('body')}}
            </span>
        @endif
    </p>
    <p>
        <input type="submit" value="Add comment">
    </p>
</form>
<script src="/js/main.js"></script>
@endsection
