@extends('layouts.app')

@section('content')
    <main>
        <h1>Login</h1>
        <form action="{{ route('auth.store') }}" class="credential-form" method="POST">
            @csrf
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="example@example.com" value="{{ old('email') }}">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
            <button type="submit">Login</button>
            @if($errors->has('email'))
                <div class="error-box">
                    <p>{{ $errors->first('email') }}</p>
                </div>
            @endif
        </form>
    </main>
@endsection