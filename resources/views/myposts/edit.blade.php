@extends('layouts.app')

@section('content')
    <main>
        <h1>Editing your post...</h1>
        <form action="{{ route('myposts.update', $post->id) }}" method="POST" class="write-form">
            @csrf
            @method('PUT')
            <div class="form-field">
                <label for="title">Title</label>
                <input id="title" name="title">
            </div>
            <br>
            <div class="form-field">
                <label for="content">Content</label>
                <textarea name="content" id="content"></textarea>
            </div>
            <br>
            <button type="submit">Save</button>
        </form>
    </main>
@endsection