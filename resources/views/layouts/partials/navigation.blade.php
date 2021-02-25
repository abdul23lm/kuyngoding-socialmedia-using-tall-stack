<div class="bg-cool-gray-800" x-data="{ open: false }" >
<div class="flex justify-between flex-col md:flex-row items-center">
    <div class="flex justify-between w-full md:w-auto px-4 py-4 border-b border-cool-gray-600 md:border-b-0">
        <div>
            <a href="/" class="text-white font-semibold text-lg">
             {{ config('app.name')}}
            </a>
        </div>

        <div class="block md:hidden" >

            <button @click="open = !open" class="text-white focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">

                <path  x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"></path>

                <path  x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>

                </svg>

            </button>

        </div>
    </div>
    <div x-bind:class="{ 'hidden': !open }" class="leading-loose py-1 md:flex md:items-center justify-between w-full">
        <div class="flex flex-col md:flex-row md:items-center" >

        <a href="#" class="block text-cool-gray-400 hover:text-white px-4 md:py-4">Explore User</a>
        <a href="#" class="block text-cool-gray-400 hover:text-white px-4 md:py-4">Timeline</a>

        </div>



        <div class="flex flex-col md:flex-row md:items-center">
        @auth
            <a  href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="block text-cool-gray-400 hover:text-white px-4 md:py-4">
                Log out
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}" class="block text-cool-gray-400 hover:text-white px-4 md:py-4">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="block text-cool-gray-400 hover:text-white px-4 md:py-4">Register</a>
            @endif
        @endauth
        </div>
    </div>
</div>

<div>


