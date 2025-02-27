@extends('layouts.app')

@section('content')
    <main>
        <h1>Overview</h1>

    <section id="filter-section">
        <form action="{{ route('posts.index') }}" method="GET">
            @csrf
            <label for="label_id">Labels</label>
            <select name="label_id" id="label_id">
                @foreach ($labels as $label)
                    <option value="{{ $label->id }}">{{ $label->name }}</option>
                @endforeach
            </select>
            <button type="submit">Filter</button>
        </form>
        <a href="{{ route('posts.index') }}"><button>clear</button></a>
    </section>

        <ul>
        @foreach($posts as $post)
            <li class="post-container">
                <div>
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    <p>by {{ $post->user->name }} - {{ $post->created_at }}</p>
                </div>
                <br><hr>

                <div class="post-label-div">
                    <h4>labels:</h4>
                    @foreach ($post->labels as $post_label)
                        <p>{{ $post_label->name }},</p>
                    @endforeach
                </div>
            </li>
            <br>
        @endforeach
        </ul>
    </main>
@endsection