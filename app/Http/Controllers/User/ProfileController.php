<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Account\User;

class ProfileController extends Controller
{
    public function view($id){
        $user = User::where('id',$id)->first();
        return view('user.profile',compact('user'));
    }
    public function update(Request $request){
        $user = User::find($request->id);

        if (!$user) {
            // إذا لم يتم العثور على المستخدم، يمكنك إجراء الإجراء المناسب هنا
            return response()->json(['message' => 'المستخدم غير موجود'], 404);
        }

        // تحديث الاسم إذا تم تقديمه
        if ($request->has('name')) {
            $user->name = $request->input('name');
        }

        // تحديث البريد الإلكتروني إذا تم تقديمه
        if ($request->has('email')) {
            $user->email = $request->input('email');
        }

        // تحديث رقم الهاتف إذا تم تقديمه
        if ($request->has('phone')) {
            $user->phone = $request->input('phone');
        }

        // حفظ التغييرات
        $user->save();

        return redirect()->route('user.profile',['id'=>$user->id])->with('success', 'تم التحديث بنجاح');
    }
}
