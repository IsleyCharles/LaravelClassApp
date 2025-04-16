<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'feedback' => 'required|string|max:1000',
        ]);

        Feedback::create([
            'content' => $request->feedback,
            'user_id' => auth()->id(), // Save the logged-in user's ID
        ]);

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}
