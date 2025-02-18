@extends('layouts.app')

@section('content')
    <main>
        <h1>Login</h1>
        <form action="" id="login-form">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="example@example.com">
            <label for="password">Password</label>
            <input type="password" id="password">
            <button type="submit">Login</button>
        </form>
    </main>
@endsection