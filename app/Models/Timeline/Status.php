<?php

namespace App\Models\Timeline;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'hash', 'body'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
