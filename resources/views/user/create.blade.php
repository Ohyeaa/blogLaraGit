@extends('layouts.app')

@section('content')
    <main>
            <h1>Register</h1>
            <form action="{{ route('user.store') }}" class="credential-form" method="POST">
                @csrf
                <label for="name">Name</label>
                <input name="name" id="name">
                <label for="email">Email</label>
                <input name="email" id="email" placeholder="example@example.com">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <button type="submit">Register</button>
            </form>
    </main>
@endsection