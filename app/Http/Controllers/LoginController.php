<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAuthRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('auth.create');
    }

    //login
    public function store(StoreAuthRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended();
        }

        return back()->onlyInput('email'); //withErrors() seems unnessecary since Request class seems to handle errors
    }

    //logout
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('posts.index');
    }
}
