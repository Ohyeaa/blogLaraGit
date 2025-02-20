@extends('layouts.app')

@section('content')
    <main>
        <h1>Overview</h1>
        <ul>
        @foreach($posts as $post)
            <li class="post-container">
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a> 
                <br>
                Published {{ $post->created_at }}
            </li>
            <br>
        @endforeach
        </ul>
    </main>
@endsection