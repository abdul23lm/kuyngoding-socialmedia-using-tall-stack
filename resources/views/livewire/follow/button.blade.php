<div>
    @if(auth()->user()->isNot($user))
        @if(auth()->user()->following($user))
        <x-button.error wire:click="unfollow">Unfollow</x-button.error>
        @else
            <x-button.primary wire:click="follow">Follow</x-button.primary>
        @endif
    @else
        <a href="/settings" class="inline-flex justify-center w-auto px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">Edit your profile</a>
    @endif

</div>
