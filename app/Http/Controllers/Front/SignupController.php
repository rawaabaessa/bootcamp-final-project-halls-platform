<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignupController extends Controller
{
    public function view()
    {
        return view('front.signup2');
    }
    public function step2()
    {
        return view('front.signuprequestwo');
    }
    public function register()
    {
        return view('front.register');
    }
}
