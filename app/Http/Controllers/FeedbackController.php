<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validate the feedback input
        $request->validate([
            'feedback' => 'required|string|max:1000',
        ]);

        // Save the feedback (you can customize this to save to a database)
        // Example: Feedback::create(['content' => $request->feedback]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }
}
