<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\SignupRequest;
use App\Models\Account\User;
use App\Models\Account\Role;
use Illuminate\Support\Facades\Validator;

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
        // dd($request); 
        // $rules = [
        //     'name' => 'required|string|min:10|max:250',
        //     'email' => 'required|email|max:250|unique:users',
        //     'phone' => 'required|integer|min:9|max:8|unique:users',
        //     'password' => 'required|min:6|confirmed',
        //     'role' => 'required',
        // ];
        // $messages = [
        //     'name.required' => 'هذا الحقل مطلوب',
        //     'name.string' => 'قيمة غير صالحة',
        //     'name.min' => 'يجب ان يتجاوز 10 احرف',
        //     'name.max' => 'يجب ان لا يتجاوز 250 حرف',
        //     'email.required' => 'هذا الحقل مطلوب',
        //     'email.email' => 'قيمة غير صالحة',
        //     'email.unique' => 'الايميل موجود مسبقا',
        //     'email.max' => 'يجب ان لا يتجاوز 250 حرف',
        //     'phone.required' => 'هذا الحقل مطلوب',
        //     'phone.integer' => 'قيمة غير صالحة',
        //     'phone.min' => 'يجب ان لا يقل عن 9 ارقام',
        //     'phone.max' => 'يجب ان لا يتجاوز 9 ارقام',
        //     'phone.unique' => 'الهاتف موجود مسبقا',
        //     'password.required' => 'هذا الحقل مطلوب',
        //     'password.min' => 'يجب ان لا يقل عن 6 احرف',
        //     'password.confirmed' => 'كلمة السر غير متطابقة',
        //     'role' => 'هذا الحقل مطلوب'
        // ];
        // $validator = Validator::make($request->all(), $rules, $messages);
        // // Check if validation fails
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);

        $email = $request->email;
        $user = User::where('email', $email)->first();
        $user->roles()->attach(Role::where('name', $request->input('role'))->first()->id);
        $user->save();
        return redirect()->route('signin');
    }
}
