<?php

namespace App\Http\Controllers;

use App\Models\Job; // Import the Job model
use App\Models\Blog;
use App\Models\User;

class UserController extends Controller
{
    public function ldashboard()
    {
        $jobCount = Job::count(); // Total number of jobs
        $jobs = Job::latest()->take(5)->get(); // Fetch the latest 5 jobs
        $blogCount = Blog::count(); // Total number of blogs
        $alumniCount = User::count(); // Total number of alumni

        return view('users.ldashboard', compact('jobCount', 'jobs', 'blogCount', 'alumniCount'));
    }
}
