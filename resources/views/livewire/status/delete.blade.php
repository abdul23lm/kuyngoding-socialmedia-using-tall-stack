<div class="container">
    <div class="bg-white p-5 rounded-lg border border-cool-gray-200 w-full lg:w-1/2 lg:mx-auto text-center">
        <div class="text-cool-gray-700">
            <div class="text-xl font-bold mb-5" >
                Are you sure?
            </div>
            <div class="flex items-start border border-cool-gray-200 rounded-lg p-4 mb-5 bg-cool-gray-50">
                <img class="mr-3 w-16 h-16 rounded-full object-cover object-center" src="{{ $status->user->gravatar() }}">
                <div class="text-left">
                    <div class="text-sm text-cool-gray-400 mb-3" >{{ $status->published }}</div>
                    <div class="text-cool-gray-700 leading-relaxed">{!! nl2br($status->body) !!}</div>
                    <div class="text-sm text-cool-gray-400 mt-4 flex items-center -mx-4">
                        <div class="flex items-center mx-4">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                            23 Comments
                        </div>

                        <div class="flex items-center mx-4">
                            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path></svg>
                            200 Likes
                        </div>
                    </div>
                </div>
            </div>
            <button wire:click.prevent="destroy" class="border border-red-500 bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg text-center inline-block text-white">Delete</button>
            <a class="border border-cool-gray-200 bg-white hover:bg-cool-gray-100 px-4 py-2 rounded-lg text-center inline-block" href="{{ route('status.show', $status->hash) }}">Cancel</a>
        </div>
    </div>
</div>
