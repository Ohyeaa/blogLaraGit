@extends('layouts.app')

@section('content')
    <main>
        <article>
            <h1>{{ $post->title }}</h1>
            <p id="content">{{ $post->content }}</p>
        </article>
    </main>
@endsection