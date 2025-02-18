@extends('layouts.app')

@section('content')
    <main>
        <h1>Blog Posts</h1>
        <ul>
        @foreach($posts as $post)
            <div>
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a> 
                <br>
                Published {{ $post->created_at }}
            </div>
            <br>
        @endforeach
        </ul>
    </main>
@endsection