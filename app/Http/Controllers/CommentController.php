<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'feedback_id' => 'required|exists:feedbacks,id',
        ]);

        $comment = new Comment();
        $comment->user_id = auth()->id();
        $comment->feedback_id = $request->feedback_id;
        $comment->content = $request->content;
        $comment->save();

        return back()->with('success', 'Comment added successfully.');
    }
}
