@extends('layouts.app')

@section('content')
    <main>
        <h1>Overview</h1>
        <ul>
        @foreach($posts as $post)
            <li class="post-container">
                <div>
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    <p>by {{ $post->user->name }} - {{ $post->created_at }}</p>
                </div>
                <br><hr>

                <div class="post-label-div">
                    <h4>labels:</h4>
                    @foreach ($post->labels as $post_label)
                        <p>{{ $post_label->name }},</p>
                    @endforeach
                </div>
            </li>
            <br>
        @endforeach
        </ul>
    </main>
@endsection