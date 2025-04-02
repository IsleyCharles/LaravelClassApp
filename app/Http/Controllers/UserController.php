<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('users.dashboard'); // Create this view for the logged-in user's landing page
    }
}
