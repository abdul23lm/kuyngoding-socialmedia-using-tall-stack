<div class="bg-white lg:h-screen w-full lg:w-1/5 lg:fixed lg:order-r border-cool-gray-200">
    @auth
        <div class="bg-cool-gray-50 border-b border-cool-gray-200 px-6 py-5">
            <div class="flex">
                <div class="flex-shrink-0 mr-3">
                    <img class="w-14 h-14 rounded-full object-cover object-center" src="{{ auth()->user()->gravatar() }}">
                </div>
            <div>
                <h1>{{ auth()->user()->name }}</h1>
                <small class="text-sm text-cool-gray-600" >
                    Joined {{ auth()->user()->created_at->format("d F, Y") }}
                </small>
            </div>

            </div>
            <div class="leading-relaxed text-sm text-cool-gray-600 mt-4">
                {{ auth()->user()->description }}
            </div>
        </div>

    <div class="py-2 leading-loose">
        @auth
        <a href="/timeline" class="block py-1 px-6 hover:bg-cool-gray-100">Timeline</a>
        @endauth
        <a href="{{ route('settings') }}" class="block py-1 px-6 hover:bg-cool-gray-100">Settings</a>
        <a href="{{ route('account.show',auth()->user()->usernameOrHash) }}" class="block py-1 px-6 hover:bg-cool-gray-100">Your Profile</a>
        <a href="" class="block py-1 px-6 hover:bg-cool-gray-100">Your Friends</a>

        <a  href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            class="block py-1 px-6 hover:bg-cool-gray-100">
            Log out
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    @else

        <div class="py-2 leading-loose">
            <div class="px-6 py-1 font-semibold text-lg">{{config('app.name')}}</div>
            <a href="{{ route('login') }}" class="block py-1 px-6 hover:bg-cool-gray-100">Login</a>
            <a href="{{ route('register') }}" class="block py-1 px-6 hover:bg-cool-gray-100">Register</a>
        </div>

    @endauth

</div>
