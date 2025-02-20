<nav id="nav">
    <ul>
        <li class="nav-space">
            <a href="{{ route('posts.index') }}" class="nav-link{{ Route::is('posts.index') ? '-current' : '' }}">
                All posts
            </a>
        </li>
        <li class="nav-space">
            <a href="{{ route('posts.create') }}" class="nav-link{{ Route::is('posts.create') ? '-current' : '' }}">
                Write Post
            </a>
        </li>
        <li class="nav-space">
        @guest
            <a href="{{ route('auth.create') }}" id="login-link" class="nav-link{{ Route::is('auth.create') ? '-current' : '' }}">
                Login
            </a>
        @endguest
        </li>
    </ul>
</nav>

