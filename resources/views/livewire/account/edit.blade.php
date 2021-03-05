<div class="container">
    <div class="flex">
        <div class="w-full md:w-1/2">
            <div class="bg-white rounded border border-cool-gray-200 shadow p-5">
                <h1 class="capitalize text-lg text-cool-gray-700">Update your profile</h1>

                <form wire:submit.prevent="update">
                    <div class="mb-5">
                        <label for="picture" class="block font-medium mb-1">Your profile picture</label>
                        <input type="file" wire:model="picture" id="picture">
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
