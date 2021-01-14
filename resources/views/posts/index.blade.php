@extends('layouts.default')

{{-- @section('title')
Blog Posts
@endsection --}}

@section('title', 'Blog Posts')

@section('content')
    <h1>
        <a href="{{ url('/posts/create') }}" class="header-menu">New Post</a>
        Blog Posts
    </h1>
    <ul>
      @forelse ($posts as $post)
        <li>
            <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a>
        </li>
      @empty
        <li>No posts yet</li>
      @endforelse
    </ul>
@endsection
