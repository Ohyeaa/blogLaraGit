@extends('layouts.app')

@section('content')
    <main>
        <h1>Editing your post...</h1>
        <form action="{{ route('myposts.update', $post->id) }}" method="POST" class="write-form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-field">
                <label for="title">Title</label>
                <input id="title" name="title" value="{{ $post->title }}">
            </div>
            <br>
            <div class="form-field">
                <label for="content">Content</label>
                <textarea name="content" id="content">{{ $post->content }}</textarea>
            </div>
            <div class="file-input">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div>
                <label for="premium">Premium</label>
                <input type="radio" name="is_premium" id="premium" value="1" {{ $post->is_premium === 1 ? 'checked' : '' }}  >
                <label for="not_premium">Free</label>
                <input type="radio" name="is_premium" id="not_premium" value="0" {{ $post->is_premium === 0 ? 'checked' : 0 }}>
            </div>
            <br>
            <button type="submit" class="submit-button">Save</button>
        </form>
    </main>
@endsection