@extends('layouts.default')

@section('title', $post->title)

@section('content')
    <h1>
        <a href="{{ url('/') }}" class="header-menu">Back</a>
        {{ $post->title }}
    </h1>
    <p>{!! nl2br(e($post->body)) !!}</p>
@endsection
