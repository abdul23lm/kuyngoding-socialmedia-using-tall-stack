<div class="container">
    <div class="flex">
        <div class="w-1/2">
            <div class="border border-cool-grey-300 rounded-lg p-5 mb-5">
                <livewire:status.block :status="$status" :key="$status->id"/>
            </div>

            <livewire:comment.index :status="$status" :key="$status->id"/>
            @auth
            <livewire:comment.create :status="$status" :key="$status->id"/>
            @endauth
        </div>
    </div>
</div>
