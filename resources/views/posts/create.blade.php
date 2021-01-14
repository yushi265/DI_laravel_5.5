@extends('layouts.default')

@section('title', 'NewPost')

@section('content')
    <h1>
        <a href="{{ url('/') }}" class="header-menu">Back</a>
        New Post
    </h1>
    <form action="{{ url('/posts') }}" method="post">
        {{ csrf_field() }}
        <p>
            <input type="text" name="title" placeholder="enter title" value="{{ old('title') }}">
            @if ($errors->has('title'))
                <span class="error">{{ $errors->first('title') }}</span>
            @endif
        </p>
        <p>
            <textarea name="body" placeholder="enter body">{{ old('title') }}</textarea>
            @if ($errors->has('body'))
                <span class="error">{{ $errors->first('body') }}</span>
            @endif
        </p>
        <p>
            <input type="submit" value="Add">
        </p>
    </form>
@endsection
