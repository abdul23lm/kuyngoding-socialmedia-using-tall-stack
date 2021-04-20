<div class="container">
    <div class="flex">
        <div class="w-1/2">
            <div class="border border-cool-grey-300 rounded-lg p-5 mb-5">
                <livewire:status.block :status="$status" :key="$status->id"/>
            </div>
            @if ($status->comments_count)
            <livewire:comment.index :status="$status" :key="$status->id"/>
            @endif
            <livewire:comment.create :status="$status" :key="$status->id"/>
        </div>
    </div>
</div>
