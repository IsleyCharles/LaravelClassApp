<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class AboutController extends Controller
{
    public function index()
    {
        // Fetch the latest feedback
        $feedbacks = Feedback::latest()->take(5)->get(); // Adjust the number as needed

        return view('about.about', compact('feedbacks'));
    }
}
