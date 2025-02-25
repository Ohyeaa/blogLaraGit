@extends('layouts.app')

@section('content')
    <main>
        <h1>My Posts</h1>
        <section>
            <h2>Settings</h2>
            <a href="{{ route('labels.index') }}">Labels</a>
        </section>
        <section>
            <ul>
            @foreach($posts as $post)
                <li class="post-container">
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a><br>
                    <p>Published {{ $post->created_at }}</p>
                    <a href="{{ route('myposts.edit', $post->id) }}"><button>Edit Post</button></a>
                    <form action="{{ route('myposts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
                <br>
            @endforeach
            </ul>
        </section>
    </main>
@endsection