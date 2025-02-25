<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLabelRequest;
use App\Models\Label;
use Illuminate\Support\Facades\Auth;

class LabelController extends Controller
{
    public function index()
    {
        //labels
        $labels = Auth::user()->labels;
        
        // leerzaam - first I had something that sort of worked: $community_labels = Label::whereRelation('users', 'user_id', '!=', Auth::id())->get();
        $community_labels = Label::whereDoesntHave('users', function ($query) {
            $query->where('user_id', Auth::id());
        })->get();

        return view('labels.index', compact('labels', 'community_labels'));
    }

    public function store(StoreLabelRequest $request)
    {   // TODO: ATTACH IF LABEL ALREADY EXISTS, ELSE CREATE NEW CATEGORY WITH CODE BELOW

        $validated = $request->validated();

        Label::create($validated)->users()->attach(Auth::id());

        return redirect()->back();
    }
}
