<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //registerpage
    public function create()
    {
        return view('user.create');
    }

    //register
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();

        User::create($validated);

        return redirect()->route('auth.create');
    }
}
