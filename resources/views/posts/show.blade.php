@extends('layouts.app')

@section('content')
    <main>
        <article>
            <h1>{{ $post->title }}</h1>
            <p>{{ $post->content }}</p>
        </article>
    </main>
@endsection