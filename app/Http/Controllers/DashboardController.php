<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalmembers = Member::count();
        return view('dashboard', compact('totalmembers'));
    }
}
