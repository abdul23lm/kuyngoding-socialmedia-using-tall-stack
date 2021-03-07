<?php

namespace App\Http\Livewire\Follow;

use Livewire\Component;

class Statistic extends Component
{

    public $user;
    protected $listeners = ['statisticUpdated'];

    public function statisticUpdated()
    {
    }

    public function mount($user)
    {
        $this->user = $user;
        // dd($this->user);
    }
    public function render()
    {
        return view('livewire.follow.statistic');
    }
}
