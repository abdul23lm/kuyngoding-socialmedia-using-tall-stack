<?php

namespace App\Http\Livewire\Account;

use App\User;
use Livewire\Component;

class Show extends Component
{
    public $user;

    public function mount($identifier)
    {
        $this->user = User::where('username', $identifier)->orWhere('hash', $identifier)->first();
    }

    public function render()
    {
        return view('livewire.account.show');
    }
}
