<div class="bg-white text-cool-gray-600 block md:inline-block rounded-lg shadow mt-8 md:mt-0">
    <div class="flex justify-center">
            <div class="flex">
                <div class="flex-1 py-2 text-center border-r border-cool-gray-100 px-6">
                    <div>
                        Status
                    </div>
                    <div class="text-xl font-semibold text-cool-gray-800">
                        250
                    </div>
                </div>
                <div class="flex-1 py-2 text-center border-r border-cool-gray-100 px-6">
                    <div>
                        Following
                    </div>
                    <div class="text-xl font-semibold text-cool-gray-800">
                        {{ $user->follows()->count() }}
                    </div>
                </div>
                <div class="flex-1 py-2 text-center px-4">
                    <div>
                        Followers
                    </div>
                    <div class="text-xl font-semibold text-cool-gray-800">
                        {{ $user->followers()->count() }}
                    </div>
                </div>
            </div>
    </div>
</div>
