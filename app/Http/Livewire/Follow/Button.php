<?php

namespace App\Http\Livewire\Follow;

use Livewire\Component;

class Button extends Component
{

    public $user;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function follow()
    {
        // dd($this->user);
        auth()->user()->follow($this->user);
        $this->emit('statisticUpdated');
    }

    public function unfollow()
    {
        // dd($this->user);
        auth()->user()->unfollow($this->user);
        $this->emit('statisticUpdated');
    }

    public function render()
    {
        return view('livewire.follow.button');
    }
}
