@extends('layouts.app')

@section('content')
    <main>
        <h1>What's on your mind?</h1>
        <form action="{{ route('myposts.store') }}" method="POST" class="write-form" enctype="multipart/form-data">
            @csrf
            <div class="form-field">
                <label for="title">Title</label>
                <input type="text" id="title" name="title">
            </div>
            <br>
            <div class="form-field">
                <label for="content">Content</label>
                <textarea name="content" id="content"></textarea>
            </div>
            <div class="file-input">
                <label for="image">Upload Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="mark-premium">
                <label for="premium">Premium</label>
                <input type="radio" name="is_premium" id="premium" value="1">
                <label for="not_premium">Free</label>
                <input type="radio" name="is_premium" id="not_premium" value="0">
            </div>
            <br>
            <button type="submit" class="submit-button">Save</button>
        </form>
    </main>
@endsection