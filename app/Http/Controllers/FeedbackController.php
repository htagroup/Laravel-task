<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);

        Feedback::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
        ]);

        return response()->json(['message' => 'Feedback submitted successfully']);
    }

    public function getAllFeedback()
    {
        $feedbackWithUser = Feedback::with('user')->get();
        return response()->json($feedbackWithUser);
    }
}
