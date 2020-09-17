<div class="bg-cool-gray-800">
<div>
    <div>
        <div>

        </div>
        <div>

        </div>
    </div>
    <div>
        <div>

        </div>
        <div>
        @auth
            <a  href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="block text-cool-gray-400 hover:text-white">
                Log out
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}" class="block text-cool-gray-400 hover:text-white">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="block text-cool-gray-400 hover:text-white">Register</a>
            @endif
        @endauth
        </div>
    </div>
</div>

<div>


