@extends('layouts.app')

@section('content')
    <main>
        <h1>What's on your mind?</h1>
        <form action="{{ route('posts.store') }}" method="POST" class="write-form">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user_id }}">
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