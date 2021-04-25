<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public $status;
    public function mount($status)
    {
        $this->status = $status;
    }

    public function likeable()
    {
        return $this->morphTo();
    }
}
