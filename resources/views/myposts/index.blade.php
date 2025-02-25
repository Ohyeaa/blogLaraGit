@extends('layouts.app')

@section('content')
    <main>
        <h1>My Posts</h1>
        <a href="{{ route('labels.index') }}">Manage Labels</a>
        <section>
            <ul>
            @foreach($posts as $post)
                <li class="post-container">
                    <div>
                        <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                        <br>
                        <p>Published {{ $post->created_at }}</p>
                        <h4>labels:</h4>
                            @foreach ($post->labels as $post_label)
                            <span>
                                {{ $post_label->name }}
                                <form action="" method="POST">
                                    <button type="submit">x</button>

                                </form>
                            </span>
                            @endforeach
                    </div>
                    <hr><br>

                    <div>
                        <a href="{{ route('myposts.edit', $post->id) }}"><button>Edit</button></a>
                        <form action="{{ route('myposts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>

                    <div>
                        <form action="{{ route('label-post.store', $post->id) }}" method="POST">
                            @csrf
                            <button>label:</button>
                            <select name="label_id" id="label_id">
                            @foreach($labels as $label)
                                <option value="{{ $label->id }}">{{ $label->name }}</option>
                            @endforeach
                            </select>
                        </form>
                    </div>
                </li>
                <br>
            @endforeach
            </ul>
        </section>
    </main>
@endsection