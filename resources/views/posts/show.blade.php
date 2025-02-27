@extends('layouts.app')

@section('content')
    <main>
        <article id="show-content-box">
            <h1>{{ $post->title }}</h1>
            @if($post->image)
                <section id="image-box">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="post image" width="750" height="460" />
                </section>
            @endif
            <p id="show-content">{{ $post->content }}</p>
        </article>

        <section id="comment-section">
            <h2>Comments:</h2>
            <ul>
            @foreach($post->comments as $comment)
                <li class="comment">
                    <b>{{ $comment->user->name }}: </b>{{ $comment->content }} - {{ $comment->created_at }}
                </li>
            @endforeach
            </ul>
        </section>

        @auth
            <section id="comment-input">
                <form action="{{ route('comments.store') }}" method="POST" class="form-field">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <label for="content">Your comment:</label>
                    <br>
                    <textarea name="content" id="content"></textarea>
                    <br>
                    <button type="submit" class="submit-button">Submit</button>
                </form>
            </section>
        @endauth
    </main>
@endsection