<?php

namespace App\Http\Controllers\Front;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;

class SigninController extends Controller
{
    public function view()
    {
        return view('front.signin');
    }
    
}
