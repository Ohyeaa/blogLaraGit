<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatorController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('auth.create');
    }
}
