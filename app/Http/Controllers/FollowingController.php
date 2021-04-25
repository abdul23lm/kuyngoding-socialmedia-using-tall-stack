<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function __invoke($identifier, $follow)
    {
        // dd($follow);
        $user = User::where('hash', $identifier)->orWhere('username', $identifier)->firstOrFail();
        if ($follow == "following") {
            $follows = $user->follows()->paginate(16);
        } else {
            $follows = $user->followers()->paginate(16);
        }

        return view('follows.index', compact('follow', 'follows'));
    }
}
