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
        @guest
        <li class="nav-space">
            <a href="{{ route('auth.create') }}" class="nav-link{{ Route::is('auth.create') ? '-current' : '' }}">
                Login
            </a>
        </li>
        <li class="nav-space">
            <a href="{{ route('user.create') }}" class="nav-link{{ Route::is('user.create') ? '-current' : '' }}">
                Register
            </a>
        </li>
        @endguest
        @auth
        <li class="nav-space">
            <a href="{{ route('auth.delete') }}" class="nav-link">
                Logout
            </a>
        </li>
        @endauth
    </ul>
</nav>

