<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ldashboard()
    {
        return view('users.ldashboard');
    }
}
