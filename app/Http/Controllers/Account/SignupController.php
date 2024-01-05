<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SignupRequest;
use App\Models\Account\User;
use App\Models\Account\Role;

class SignupController extends Controller
{
    //

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        return view('front.signup');
    }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);

        $email = $request->email;
        $user = User::where('email', $email)->first();
        $user->roles()->attach(Role::where('name', $request->input('role'))->first()->id);
        $user->save();

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        // echo "<script>console.log('before if')</script>";
        if($request->input('role') == 'customer'){
            return redirect()->route('user.dashboard')
        ->withSuccess('You have successfully signuped & signed in!');
        // echo "<script>console.log('first if')</script>";
        }
        else{
            return redirect()->route('user.dashboard')
        ->withSuccess('You have successfully signuped & signed in!');
        }
        
    }
}
