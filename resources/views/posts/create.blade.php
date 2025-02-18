@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <br>
        <input type="text" id="title" name="title">
        <br><br>
        <label for="content">Content</label>
        <br>
        <textarea name="content" id="content"></textarea>
        <br>
        <button type="submit">Save</button>
    </form>
@endsection