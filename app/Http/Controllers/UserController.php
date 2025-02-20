<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //register page
    public function create()
    {
        return view('user.create');
    }

    //register
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();

        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = $validated['password'];
        $user->save();
        //mass assignment: User::create($validated);
        // auto login: Auth::login($user);

        return redirect()->route('auth.create');
    }
}
