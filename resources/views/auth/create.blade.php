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
            @if ($errors->any())
                <div class="error-box">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </main>
@endsection