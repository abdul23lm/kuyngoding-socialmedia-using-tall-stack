<?php

namespace App\Http\Livewire\Comment;

use Carbon\Carbon;
use Livewire\Component;

class Create extends Component
{

    public $body;
    public $status;

    public function mount($status)
    {
        return $this->status = $status;
    }

    public function store()
    {
        // dd($this->status);
        $this->validate([
            'body' => 'required'
        ]);

        auth()->user()->comments()->create([
            'status_id' => $this->status->id,
            'body' => $this->body,
            'hash' => \Str::random(22) . strtotime(Carbon::now()),
        ]);

        return redirect()->route('status.show', $this->status->hash);
    }

    public function render()
    {
        return view('livewire.comment.create');
    }
}
