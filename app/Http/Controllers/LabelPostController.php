<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class LabelPostController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $post->labels()->syncWithoutDetaching($request->label_id);
        return back();
    }

    public function destroy(Request $request, Post $post)
    {
        $post->labels()->detach($request->label_id);
        return back();
    }
}
