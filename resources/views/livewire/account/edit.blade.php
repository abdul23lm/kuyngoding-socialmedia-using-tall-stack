<div class="container">
    <div class="flex">
        <div class="w-full md:w-1/2">
            <div class="bg-cool-gray-50 rounded border border-cool-gray-200 shadow">
                <h1 class="capitalize text-lg text-cool-gray-700 px-5 py-2 border-b border-cool-gray-200 bg-cool-gray-100 font-semibold">Update your profile</h1>

                <form wire:submit.prevent="update" class="p-5">
                    <div class="mb-5">
                        <div class="flex items-center">
                            @if ($picture)
                            <img class="w-16 h-16 rounded-full mr-3 object-cover object-center" src="{{ $picture->temporaryUrl() }}">
                            @else
                            <img class="w-16 h-16 rounded-full mr-3 object-cover object-center" src="{{ auth()->user()->gravatar() }}">
                            @endif
                            <label for="picture" class="bg-white border border-cool-gray-200 rounded-lg px-4 py-2">
                                Upload Image
                                <input type="file" wire:model="picture" id="picture" class="sr-only">
                            </label>
                        </div>
                        @error('picture')
                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="name" class="block font-medium mb-1">Username</label>
                        <input type="text" wire:model="username" id="username" class="w-full form-input">
                        @error('username')
                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="name" class="block font-medium mb-1">Name</label>
                        <input type="text" wire:model="name" id="name" class="w-full form-input">
                        @error('name')
                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="description" class="block font-medium mb-1">Bio</label>
                        <textarea wire:model="description" id="description" class="w-full form-textarea"></textarea>
                        @error('description')
                            <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                <x-button.primary>Update</x-button.primary>
                </form>

            </div>
        </div>
    </div>
</div>
