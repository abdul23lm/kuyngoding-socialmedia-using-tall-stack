<?php

namespace App\Models\Timeline;

use App\Models\Like;
use App\Models\User;
use App\Traits\Likeable;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

    use Likeable;

    protected $fillable = [
        'hash', 'body'
    ];

    protected $withCount = ['comments'];

    public function getPublishedAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
