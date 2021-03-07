<?php

namespace App\Http\Livewire\Status;

use App\Models\Timeline\Status;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $ids = auth()->user()->follows()->pluck('id');
        $ids->push(auth()->id());
        $statuses = Status::whereIn('user_id', $ids)->with('user')->latest()->paginate(10);
        // dd($statuses);
        return view('livewire.status.index', compact('statuses'));
    }
}
