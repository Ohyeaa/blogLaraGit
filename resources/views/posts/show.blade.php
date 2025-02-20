@extends('layouts.app')

@section('content')
    <main>
        <article id="show-content-box">
            <h1>{{ $post->title }}</h1>
            <p id="show-content">{{ $post->content }}</p>
        </article>
    </main>
@endsection