<div class="bg-cool-gray-800" x-data="{ open: false }" >
<div class="flex justify-between flex-col md:flex-row items-center">
    <div class="flex justify-between w-full md:w-auto px-4 py-4 bg-cool-gray-900 md:bg-transparent md:border-b-0">
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
    <div x-bind:class="{ 'hidden': !open }" class="leading-loose py-1 md:py-0 md:flex md:items-center justify-between w-full">
        <div class="flex flex-col md:flex-row md:items-center py-2 md:py-0" >

        <a href="#" class="block text-cool-gray-400 hover:text-white px-4 md:py-4">Explore User</a>
        <a href="#" class="block text-cool-gray-400 hover:text-white px-4 md:py-4">Timeline</a>

        </div>



        <div class="flex flex-col md:flex-row md:items-center">
        @auth
            <div x-data="{ dropDownIsOpen: false }"  class="border-t border-cool-gray-600 py-4 md:py-0">

                    <div>
                        <button @click="dropDownIsOpen = !dropDownIsOpen" class="flex items-center focus:outline-none px-4 md:px-6" >
                            <div class="flex-shrink-0 mr-2">
                                <img class="w-8 h-8 rounded object-center object-cover" src="{{ auth()->user()->gravatar()}}">
                            </div>
                                <div class="block text-cool-gray-400 hover:text-white pr-4 md:py-4" >
                                    {{ auth()->user()->name }}
                                </div>
                        </button>
                    </div>

                    <div  :class="{ 'md:hidden': !dropDownIsOpen }" class="block md:absolute top-0 right-0 md:mr-4 mt-2 md:mt-15 md:bg-cool-gray-700 md:w-56 md:rounded md:shadow md:py-2 leading-relax md:leading-loose">
                            <a href="{{ route('settings') }}" class="block text-cool-gray-400 hover:text-white px-4">Settings</a>
                            <a href="" class="block text-cool-gray-400 hover:text-white px-4">Your Profile</a>
                            <a href="" class="block text-cool-gray-400 hover:text-white px-4">Your Friends</a>

                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="block text-cool-gray-400 hover:text-white px-4">
                                Log out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div>
            </div>
        @else
            <a href="{{ route('login') }}" class="block text-cool-gray-400 hover:text-white px-4 md:py-4">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="block text-cool-gray-400 hover:text-white px-4 md:py-4">Register</a>
            @endif
        @endauth
        </div>
    </div>
</div>
</div>

