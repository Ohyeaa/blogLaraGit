@extends('layouts.app')

@section('content')
    <main>
        <h1>My Posts</h1>
        <ul>
        @foreach($posts as $post)
            <li class="post-container">
                <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                <br>
                <p>Published {{ $post->created_at }}</p>
                <button disabled="disabled"><a href="{{ route('myposts.edit', $post->id) }}">Edit</a></button>
                <form action="{{ route('myposts.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
            <br>
        @endforeach
        </ul>
    </main>
@endsection