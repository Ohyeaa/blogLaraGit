@extends('layouts.app')

@section('content')
    <main>
        <h1>Write a Post</h1>
        <form action="{{ route('posts.store') }}" method="POST" class="write-form">
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
            <br>
            <button type="submit">Save</button>
        </form>
    </main>
@endsection