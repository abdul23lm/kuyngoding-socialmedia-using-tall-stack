<div>
<div class="p-6 border-b border-cool-gray-200">
    <div>
        <div class="flex flex-col md:flex-row items-center md:items-start text-center md:text-left">
            <div class="flex-shrink-0 mr-0 md:mr-8 mb-4 md:mb-0">
                <img class="w-24 h-24 object-cover object-center rounded-full" src="{{ $user->gravatar() }}" alt="">
            </div>

            <div>
                <h1 class="font-semibold text-xl text-cool-gray-900 mb-2" >{{ $user->name }}</h1>
                <div class="text-cool-gray-600 mb-5">
                    <div class="leading-relaxed mb-4">
                        {{ $bio }}
                        @if (strlen($bio) >= 120)
                        <button wire:click="readMore" class="{{$readmore ? 'block' : 'hidden'}} hover:underline focus:outline-none text-sm text-cool-gray-600 block ">
                            Read More
                        </button>
                        <button wire:click="less" class="{{$readmore ? 'hidden' : 'block'}} hover:underline focus:outline-none text-sm text-cool-gray-600 block ">
                            Less
                        </button>
                        @endif
                    </div>
                    <div>
                        Joined: {{ $user->created_at->format("d F, Y") }}
                    </div>
                </div>

                <livewire:follow.button :user="$user"/>

            </div>
        </div>
    </div>
    <div class="flex justify-between w-full p-4">
        <livewire:follow.statistic :user="$user"/>
    </div>
</div>

    <div class="p-4">
        @foreach ($statuses as $status)
        <div class="mb-10">
            <livewire:status.block :status="$status" :key="$status->id"/>
        </div>
        @endforeach
        @if ($statuses->hasMorePages())
            <div class="flex justify-center">
                <x-button.primary wire:click.prevent="loadMore">
                    <span wire:loading>
                        Please wait . . .
                    </span>
                <span wire:loading.class="hidden">
                        Load More
                </span>
                </x-button.primary>
            </div>
        @endif
    </div>

</div>
