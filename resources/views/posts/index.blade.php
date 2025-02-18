@extends('layouts.app')

@section('content')
    <main>
        <h1>Blog Posts</h1>
        <ul>
        @foreach($posts as $post)
            <li class="post">
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a> 
                <br>
                Published {{ $post->created_at }}
            </li>
            <br>
        @endforeach
        </ul>
    </main>
@endsection