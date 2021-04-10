<div class="container">
    <div class="flex">
        <div class="w-full md:w-1/2">
            <div class="border border-cool-gray-200 mb-10 rounded-lg overflow-hidden">
                <div class="p-4 py-3 bg-cool-gray-100 border-b border-cool-gray-200 text-cool-gray-700 font-semibold">
                    Your Status
                </div>
                <form wire:submit.prevent="update">
                    <div class="p-4 bg-cool-gray-50">
                            <textarea placeholder="What's in your mind" wire:model="body" class="form-textarea w-full resize-none border-0 focus:shadow-none p-4">{{ old('body') ?? $status->body }}</textarea>
                            @error('body')
                                <div class="text-red-500 text-sm mt-2">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="flex justify-end px-4 py-3 bg-cool-gray-100 border-t border-cool-gray-200">
                        <x-button.secondary>Post</x-button.secondary>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
