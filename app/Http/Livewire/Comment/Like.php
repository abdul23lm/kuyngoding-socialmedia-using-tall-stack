<?php

namespace App\Http\Livewire\Comment;

use Livewire\Component;

class Like extends Component
{
    public $comment;
    public function mount($comment)
    {
        $this->comment = $comment;
    }

    public function like()
    {
        // dd('Like');
        if ($this->comment->isLiked()) {
            auth()->user()->likes()->delete($this->comment->likes);
        } else {
            auth()->user()->likes()->save($this->comment->likes()->make());
        }
    }

    public function render()
    {
        return view('livewire.comment.like');
    }
}
