<div class="w-full bg-white text-cool-gray-600 block md:inline-block rounded-lg shadow mt-4">
    <div class="flex justify-center">
            <div class="flex flex-1">
                <div class="flex-1 py-2 text-center border-r border-cool-gray-100 px-6">
                    <div class="text-sm">
                        Status
                    </div>
                    <div class="text-xl font-semibold text-cool-gray-800">
                        250
                    </div>
                </div>
                <a href="{{ route('account.following', [$user->usernameOrHash, 'following']) }}" class="flex-1 py-2 text-center border-r border-cool-gray-100 px-6">
                    <div class="text-sm">
                        Following
                    </div>
                    <div class="text-xl font-semibold text-cool-gray-800">
                        {{ $user->follows()->count() }}
                    </div>
                </a>
                <a  href="{{ route('account.following', [$user->usernameOrHash, 'followers']) }} " class="flex-1 py-2 text-center px-4">
                    <div class="text-sm">
                        Followers
                    </div>
                    <div class="text-xl font-semibold text-cool-gray-800">
                        {{ $user->followers()->count() }}
                    </div>
                </a>
            </div>
    </div>
</div>
