<div class="border border-cool-gray-300 mb-5 rounded-lg overflow-hidden">
    <div class="p-4 bg-cool-gray-200 text-cool-gray-700">
        Your Status
    </div>
        <div class="card-body p-4 ">
            <form wire:submit.prevent="store">
                <textarea placeholder="What's in your mind" wire:model="body" class="form-textarea w-full resize-none"></textarea>
                @error('body')
                    <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                @enderror
            <div class="flex justify-end">
                <x-button.primary>Post</x-button.primary>
            </div>
            </form>

        </div>
</div>
