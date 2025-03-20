<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $members = Member::paginate('10');
        return view('welcome', compact('members'));
    }
}
