@extends('layouts.app')

@section('content')
<main>
    <h1>Labels</h1>
    <section>
        <h2>New Label</h2>
        <form action="{{ route('labels.store') }}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            <button type="submit">Save</button>
        </form>
    </section>

    <section>
        <h2>My Labels</h2>
        <ul>
        @foreach($labels as $label)
            <li>{{ $label->name }}
                <form action="{{ route('labels.destroy', $label->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remove</button>
                </form>
            </li>
        <br>
        @endforeach
        </ul>
    </section>

    <section>
        <h2>Add existing community label</h2>
        <ul>
            @foreach($community_labels as $community_label)
            <li>
                <p>{{ $community_label->name }}</p>
                <form action="{{ route('labels.attach', $community_label->id) }}" method="POST">
                    @csrf
                    <button type="submit">Add</button>
                </form>
            </li>
            <br>
            @endforeach
        </ul>
    </section>
</main>
@endsection