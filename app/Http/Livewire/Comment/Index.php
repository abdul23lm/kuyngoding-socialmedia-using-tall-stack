<?php

namespace App\Http\Livewire\Comment;

use Livewire\Component;

class Index extends Component
{
    public $status;

    public function mount($status)
    {
        $this->status = $status;
    }

    public function render()
    {
        $comments = $this->status->comments;
        return view('livewire.comment.index', compact('comments'));
    }
}
