@extends('layouts.app')

@section('content')
    <main>
        <h1>Login</h1>
        <form action="{{ route('auth.store') }}" class="credential-form" method="POST">
            @csrf
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="example@example.com">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <button type="submit">Login</button>
        </form>
    </main>
@endsection