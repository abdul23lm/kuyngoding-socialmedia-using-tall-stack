<?php

namespace App\Http\Livewire\Status;

use App\Models\Timeline\Status;
use Livewire\Component;

class Index extends Component
{
    public $statusId;
    public $perPage = 10;

    protected $listeners = [
        "statusUpdated",
    ];

    public function statusUpdated($statusId)
    {
    }

    public function loadMore()
    {
        sleep(0);
        $this->perPage += 10;
    }
    public function render()
    {
        $ids = auth()->user()->follows()->pluck('id');
        $ids->push(auth()->id());
        $statuses = Status::whereIn('user_id', $ids)->with('user')->latest()->paginate($this->perPage);
        // dd($statuses);
        return view('livewire.status.index', compact('statuses'));
    }
}
