<?php

namespace App\Http\Livewire\Status;

use Livewire\Component;

class Block extends Component
{
    public $status;

    public function mount($status)
    {
        $this->status = $status;
    }
    public function render()
    {
        return view('livewire.status.block');
    }
}
