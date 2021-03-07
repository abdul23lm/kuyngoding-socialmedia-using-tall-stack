<div>
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
