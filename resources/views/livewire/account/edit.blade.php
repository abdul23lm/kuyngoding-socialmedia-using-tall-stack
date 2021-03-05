<div class="container">
    <div class="flex">
        <div class="w-full md:w-1/2">
            <div class="bg-white rounded border border-cool-gray-200 shadow p-5">
                <h1 class="capitalize text-lg text-cool-gray-700">Update your profile</h1>

                <form wire:submit.prevent="update">
                    <div class="mb-5">
                        <label for="picture" class="block font-medium mb-1">Your profile picture</label>
                        <input type="file" wire:model="picture" id="picture">
                    </div>
                    <div class="mb-5">
                        <label for="name" class="block font-medium mb-1">Username</label>
                        <input type="text" wire:model="username" id="username" class="w-full form-input">
                    </div>
                    <div class="mb-5">
                        <label for="name" class="block font-medium mb-1">Name</label>
                        <input type="text" wire:model="name" id="name" class="w-full form-input">
                    </div>
                        <button type="submit" class="flex justify-center w-auto px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Update
                        </button>
                </form>

            </div>
        </div>
    </div>
</div>
