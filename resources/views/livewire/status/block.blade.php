        <div class="flex w-full">
            <div class="flex-shrink-0 mr-3" wire:poll.5000ms>
                <a href="{{ route('account.show', ['identifier' => $status->user->usernameOrHash]) }}">
                    <img class="w-16 h-16 rounded-full object-cover object-center" src="{{ $status->user->gravatar() }}">
                </a>
            </div>
            <div class="w-full relative"">
                <div class="flex justify-between" x-data="{ dropdownIsOpen: false }" >
                    <a href="{{ route('account.show', ['identifier' => $status->user->usernameOrHash]) }}" class="font-semibold text-cool-gray-900 hover:underline">{{ $status->user->name }}</a>

                    @can('update', $status)

                    <button @click="dropdownIsOpen = !dropdownIsOpen" class="hover:bg-cool-gray-100 p-1 rounded-full focus:outline-none">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div :class="{ 'hidden': !dropdownIsOpen}" class="text-sm bg-white border border-cool-gray-200 rounded py-2 w-48 absolute right-0 top-0 mt-8">
                        <a href="{{ route('status.edit', $status->hash) }}" class="block px-3 py-1 hover:bg-cool-gray-100 text-cool-gray-600 hover:text-cool-gray-800">Edit the Status</a>
                        <a href="#" class="block px-3 py-1 hover:bg-cool-gray-100 text-cool-gray-600 hover:text-cool-gray-800">Remove the Status</a>
                    </div>
                    @endcan
                </div>
                <a href="{{ route('status.show', $status->hash) }}">
                    <div class="text-sm text-cool-gray-400 mb-3" >{{ $status->published }}</div>
                        <div class="text-cool-gray-700 leading-relaxed">{!! nl2br($status->body) !!}</div>
                        <div class="text-sm text-cool-gray-400 mt-4 flex items-center -mx-4">
                            <div class="flex items-center mx-4">
                               <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                             23 Coments
                            </div>

                            <div class="flex items-center mx-4">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path></svg>
                            200 Likes
                            </div>
                    </div>
                </a>
            </div>
        </div>
