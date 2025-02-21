<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request)
    {
        $validated = $request->validated();
        $validated['user_id'] = Auth::id();
        Comment::create($validated);
        return back(); // normal redirecting doesnt seem to work, missing parameter, this seems to work
    }
}
