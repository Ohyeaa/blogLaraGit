<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Label;
use Illuminate\Support\Facades\Auth;

class LabelUserController extends Controller
{
    public function destroy(Label $label)
    {
        $label->users()->detach(Auth::id());
        return back();
    }

    public function store(Label $label)
    {
        $label->users()->syncWithoutDetaching(Auth::id());
        return back();
    }
}
