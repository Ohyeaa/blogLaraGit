@extends('layouts.app')

@section('content')
<main>
    <h1>Subscription</h1>
    <form action="{{ route('subscribe.update', Auth::id()) }}", method="POST">
        @csrf
        @method('patch')
        <button type="submit" id="subscribe-button">Subscribe</button>
    </form>
    @if(session('success'))
    <div class="confirm-message">
        <p>{{ session('success') }}</p>
    </div>
    @endif
</main>
@endsection