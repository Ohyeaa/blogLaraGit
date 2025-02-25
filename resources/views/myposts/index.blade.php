@extends('layouts.app')

@section('content')
    <main>
        <h1>My Posts</h1>
        <a href="{{ route('labels.index') }}">Manage Labels</a>
        <section>
            <ul>
            @foreach($posts as $post)
                <li class="post-container">
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a><br>
                    <p>Published {{ $post->created_at }}</p>
                    <a href="{{ route('myposts.edit', $post->id) }}"><button>Edit</button></a>
                    <form action="{{ route('myposts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                    <form action="" method="post">
                        @csrf
                        <button>label:</button>
                        <select name="" id="">
                        @foreach($labels as $label)
                            <option value="">{{ $label->name }}</option>
                        @endforeach
                        </select>
                    </form>
                </li>
                <br>
            @endforeach
            </ul>
        </section>
    </main>
@endsection