<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyEmail;

class EmailController extends Controller
{
    public function sendEmail()
    {
        Mail::to('isleycharlesmucai@gmail.com')->send(new MyEmail());
        return "Email has been sent!";
    }
}
