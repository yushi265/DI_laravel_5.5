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
<ul>
    {{-- @forelse ($posts as $post)
    <li>
        <a href="#">{{ $post->title }}</a>
    </li>
    @empty
    @endforelse --}}
</ul>

@endsection
