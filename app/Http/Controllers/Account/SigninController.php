<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Account\User;
use App\Models\Qaah\Facility;
use App\Models\Account\Role;
use App\Services\Account\AccountService;

class SigninController extends Controller
{

    // public function __construct(private AccountService $service){}

    public function view(Request $request)
    {
        if (Auth::check()) {
            // User is already signed in, redirect to a different page
            
            return redirect()->route('platform.dashboard');
        }
        return view('front.signin');
    }

    public function authenticate(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];

        // Define custom error messages
        $messages = [
            'email.required' => 'الحقل مطلوب',
            'email.email' => 'عنوان بريد إلكتروني غير صحيح',
            'password.required' => 'الحقل مطلوب',
            'password.min' => 'يجب أن لا يقل عن 6 أحرف',
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->withErrors(['email' => 'المستخدم غير موجود'])->withInput();
        }

        if (!Hash::check($password, $user->password)) {
            return redirect()->back()->withErrors(['password' => 'كلمة المرور غير صحيحة'])->withInput();
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->roles->contains('name', 'super-admin')) {
                // User has the 'super-admin' role, allow access to the admin dashboard
                return redirect()->route('platform.facility');
            } else if ($user->roles->contains('name', 'admin')) {
                // User has the 'admin' role, show an error message or redirect
                $is_exits = Facility::where('user_id', Auth::id())->exists();
                if(!$is_exits){
                    return redirect()->route('facilityInfo');
                }
                else{
                    $userfacility = User::find(Auth::id());
                    $facilityStatus = $userfacility->facility->state;
                    if($facilityStatus == 'step1'){
                        //معناته قدم الطلب و لسى ماوافقو
                        //طلبك قيد المراجعة 
                        Auth::logout();
                        return redirect()->route('underview');
                    }
                    elseif($facilityStatus == 'approved'){
                        // تمت الموافقة 
                        return redirect()->route('tenant.hall');
                    }
                    elseif($facilityStatus == 'reject'){
                        // تم الرفض  
                        // return redirect()->route('facilitydetails');
                    }
                    elseif($facilityStatus == 'complete'){
                        //يتحول لصفحة الداشبورد لانه كمل بياناته 
                        return redirect()->route('tentant.reservation');
                    }
                }
                // return redirect()->route('front.home');
            } else if ($user->roles->contains('name', 'content-admin')) {
                // User has the 'admin' role, show an error message or redirect
                return redirect()->route('front.home');
            }
            else if ($user->roles->contains('name', 'reception')) {
                // User has the 'admin' role, show an error message or redirect
                return redirect()->route('front.home');
            }
            else if ($user->roles->contains('name', 'customer')) {
                // User has the 'admin' role, show an error message or redirect
                return redirect()->route('front.home');
            }
            else{
                return redirect()->route('front.home');
            }
        }
    
    }

}
