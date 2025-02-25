<nav id="nav">
    <ul>
        <li class="nav-space">
            <a href="{{ route('posts.index') }}" class="nav-link{{ Route::is('posts.index') ? '-current' : '' }}">Stories</a>
        </li>
        @guest
        <li class="nav-space">
            <a href="{{ route('auth.create') }}" class="nav-link{{ Route::is('auth.create') ? '-current' : '' }}">Login</a>
        </li>
        <li class="nav-space">
            <a href="{{ route('user.create') }}" class="nav-link{{ Route::is('user.create') ? '-current' : '' }}">Register</a>
        </li>
        @endguest
        
        @auth
        <li class="nav-space">
            <a href="{{ route('myposts.create') }}" class="nav-link{{ Route::is('myposts.create') ? '-current' : '' }}">Write</a>
        </li>
        <li class="nav-space">
            <a href="{{ route('myposts.index') }}" class="nav-link{{ Route::is('myposts.index') ? '-current' : '' }}">My Posts</a>
        </li>
        <li class="nav-space">
            <a href="{{ route('subscribe.edit', Auth::id()) }}" class="nav-link{{ Route::is('subscribe.edit') ? '-current' : '' }}">Premium</a>
        </li>
        <li class="nav-space">
            <form action=" {{ route('auth.destroy') }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="nav-link" type="submit">Logout</button>
            </form>
        </li>
        @endauth
    </ul>
</nav>

