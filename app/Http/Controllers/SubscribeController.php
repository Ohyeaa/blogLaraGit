<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function edit(User $user)
    {
        //if (Auth::user()->isNot($user))
        if (Auth::id() !== $user->id) {
            abort(401);
        }

        return view('subscribe.edit');
    }

    public function update(User $user)
    {
        //if (Auth::user()->isNot($user))
        if (Auth::id() !== $user->id) {
            abort(401);
        }

        $user->has_premium = true;
        $user->save();

        return back()->with('success', "You're subscribed!");
    }
}
