<div class="flex border border-cool-gray-200 rounded-lg p-5">
    <div class="mr-4 flex-shrink-0">
        <img class="w-16 h-16 rounded-full object-cover object-center" src="{{ auth()->user()->gravatar() }}" >
    </div>
    <div class="w-full">
        <div class="font-semibold mb-3 text-lg">{{ auth()->user()->name }}</div>
        <div>
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <textarea wire:model="body" class="form-textarea w-full resize-none p-0 border-0 focus:shadow-none" placeholder="Type your comment . . ."></textarea>
                </div>
                <div class="flex justify-end">
                    <x-button.secondary class="secondary">Comment</x-button.secondary>
                </div>
            </form>
        </div>
    </div>
</div>
