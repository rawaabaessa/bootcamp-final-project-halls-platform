<?php

namespace App\Http\Controllers\JoinRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Location\Governorate;
use App\Models\Location\Directorate;
use App\Models\Location\Location;
use App\Models\Qaah\Facility;
use App\Models\Account\User;
use App\Http\Requests\JoinRequest;
use Carbon\Carbon;
use App\ViewModels\JoinRequest as JoinVM;
use App\Mail\ApproveMail;
use App\Mail\RejectMail;
use Illuminate\Support\Facades\Mail;


class JoinRequestController extends Controller
{
    public function index(){
        $requests = Facility::orderBy('id', 'desc')->paginate(3);
        return view('platform.requests.index',compact('requests'));
    }

    public function view(string $name){
        $Facility = Facility::where('name',$name)->first();
        $user = User::findOrFail($Facility->user_id);

        $Directorate = Directorate::findOrFail($Facility->directorate_id)->first();
        $Governorate = Governorate::findOrFail($Directorate->governorate_id)->first();
 
        $viewModel = new JoinVM($Facility, $user, $Directorate, $Governorate);

        return view('platform.requests.view')->with(['viewModel' => $viewModel]);
    }

    public function viewInfo(){

        $Governorates = Governorate::all();
        $Directorates = Directorate::all();

        return view('front.joinRequest.facilityInfo',compact('Governorates', 'Directorates'));
    }
    public function storeInfo(Request $request){
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'title' => 'required',
        //     'email' => 'required',
        //     'address' => 'required',
        //     'phone' => 'required',
        //     'license' => 'required',
        //     'governorate' => 'required',
        //     'Directorate' => 'required',
        //     'identity_NO' => 'required'
        // ],[
        //     'name.required' => ' .الحقل مطلوب',
        //     // 'name.string' => '.القيمة غير صالحة',
        //     // 'name.max' => '.يجب ان لا يتجاوز50 حرف',
        //     // 'name.min' => '.يجب ان لا يقل عن 3 احرف',
        //     // 'name.unique' => '.الاسم موجود مسبقا',
    
        //     'title.required' => ' .الحقل مطلوب',
        //     // 'title.string' => '.القيمة غير صالحة',
        //     // 'title.max' => '.يجب ان لا يتجاوز50 حرف',
        //     // 'title.min' => '.يجب ان لا يقل عن 3 احرف',
        //     // 'title.unique' => '.الاسم موجود مسبقا',
    
        //     'email.required' => ' .الحقل مطلوب',
        //     // 'email.unique' => '.الاسم موجود مسبقا',
        //     // 'email.email' => '.القيمة غير صالحة',
    
        //     'address.required' => ' .الحقل مطلوب',
        //     // 'address.min' => ' .يجب ان لا يقل عن 5 احرف',
    
        //     'phone.required' => ' .الحقل مطلوب',
        //     // 'phone.integer' => '.القيمة غير صالحة',
        //     // 'phone.min' =>  ' .يجب ان لا يقل عن 9 ارقام',
    
        //     'license.required' => ' .الحقل مطلوب',
        //     'governorate.required' => ' .الحقل مطلوب',
        //     'directorate.required' => ' .الحقل مطلوب',
    
        //     'identity_NO.required' => ' .الحقل مطلوب',
        //     // 'identity_NO.integer' => '.القيمة غير صالحة',
        //     // 'identity_NO.min' => ' .يجب ان لا يقل عن 15 حرف',
        // ]);
        // $rules = [
        //     'name' => 'required|string|max:50|min:3|unique:facilities',
        //     'title' => 'required|string|max:50|min:3|unique:facilities',
        //     'email' => 'required|email|unique:users',
        //     'address' => 'required|min:5',
        //     'phone' => 'required|integer|min:9',
        //     'license' => 'required',
        //     'governorate' => 'required',
        //     'Directorate' => 'required',
        //     'identity_NO' => 'required|integer|min:15'
        // ];
        // $messages = [
        //     'name.required' => ' .الحقل مطلوب',
        //     'name.string' => '.القيمة غير صالحة',
        //     'name.max' => '.يجب ان لا يتجاوز50 حرف',
        //     'name.min' => '.يجب ان لا يقل عن 3 احرف',
        //     'name.unique' => '.الاسم موجود مسبقا',
    
        //     'title.required' => ' .الحقل مطلوب',
        //     'title.string' => '.القيمة غير صالحة',
        //     'title.max' => '.يجب ان لا يتجاوز50 حرف',
        //     'title.min' => '.يجب ان لا يقل عن 3 احرف',
        //     'title.unique' => '.الاسم موجود مسبقا',
    
        //     'email.required' => ' .الحقل مطلوب',
        //     'email.unique' => '.الاسم موجود مسبقا',
        //     'email.email' => '.القيمة غير صالحة',
    
        //     'address.required' => ' .الحقل مطلوب',
        //     'address.min' => ' .يجب ان لا يقل عن 5 احرف',
    
        //     'phone.required' => ' .الحقل مطلوب',
        //     'phone.integer' => '.القيمة غير صالحة',
        //     'phone.min' =>  ' .يجب ان لا يقل عن 9 ارقام',
    
        //     'license.required' => ' .الحقل مطلوب',
        //     'governorate.required' => ' .الحقل مطلوب',
        //     'directorate.required' => ' .الحقل مطلوب',
    
        //     'identity_NO.required' => ' .الحقل مطلوب',
        //     'identity_NO.integer' => '.القيمة غير صالحة',
        //     'identity_NO.min' => ' .يجب ان لا يقل عن 15 حرف',
        // ];
        // Validate the request data
        // $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // $file = $request->file('license');
        // $filename = $file.Carbon::now()->timestamp;
        // $path = $file->storeAs('public\upload\facility', $filename);
        if ($request->hasFile('license')) {
            $image = $request->file('license');
            $extension = $image->getClientOriginalExtension();
            $currentDate = Carbon::now()->format('Ymd_His');
            $newImageName = $currentDate . '_' . $image->getClientOriginalName();
            
            // $path = $request->file('voucher')->storeAs('storage/upload');
            $image->storeAs('license', $newImageName, 'public');
        }
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $extensionlogo = $logo->getClientOriginalExtension();
            $currentDatelogo = Carbon::now()->format('Ymd_His');
            $newImageNamelogo = $currentDatelogo . '_' . $logo->getClientOriginalName();
            
            $logo->storeAs('logo', $newImageNamelogo, 'public');
        }
        Facility::create([
            'name' => $request->name,
            'title' => $request->title,
            'email' => $request->email,
            'address' => $request->address,
            'identity_NO' => $request->identity_NO,
            'phone' => $request->phone,
            'license'=> $newImageName,
            'logo' => $newImageNamelogo,
            'user_id' => Auth::id(),
            'directorate_id'=> $request->input('Directorate'),
            'currency' => $request->input('currency'),
            'state'=>'step1'
        ]);
        Auth::logout();
        return redirect()->route('submitdone');
    }

    public function submitdone(){
        return view('front.joinrequest');
    }
    public function underview(){
        return view('front.underview');
    }
    public function confirm($name){

        $facility = Facility::where('name', $name)->update(['state' => 'approved']);
        if ($facility > 0) {
            //ارسال ايميل لصاحب القاعة

            Mail::to('fatimabukran@gmail.com')->send(new ApproveMail());
            return redirect()->route('requests.index')->with('success', 'تم قبول الطلب بنجاح');
        } elseif ($facility === 0) {
            // لم يتم العثور على سجل يطابق الشرط أو لم يتم تحديث أي سجل
            return redirect()->route('requests.index')->with('error',  'حدث خطا ما');
        } else {
            // حدث خطأ أثناء التحديث
            return redirect()->route('requests.index')->with('error', 'حدث خطا ما');
        }
    }

    public function reject(Request $request,$name){

        $facility = Facility::where('name', $name)->update(['state' => 'reject']);
        if ($facility > 0) {
            //ارسال ايميل لصاحب القاعة
            Mail::to('fatimabukran@gmail.com')->send(new RejectMail($request->reason));

            return redirect()->route('requests.index')->with('success', 'تم رفض الطلب بنجاح');
        } elseif ($facility === 0) {
            // لم يتم العثور على سجل يطابق الشرط أو لم يتم تحديث أي سجل
            return redirect()->route('requests.index')->with('error',  'حدث خطا ما');
        } else {
            // حدث خطأ أثناء التحديث
            return redirect()->route('requests.index')->with('error', 'حدث خطا ما');
        }
    }
    public function viewDetails(){
        // return view('front.step2');
    }
    public function viewDetailsstore(Request $request){

        $services = $request->input('services');
        $prices = $request->input('prices');
        $currency = $request->input('currency');
        $occasions = $request->input('occasions');
        $bookingTimes = $request->input('booking_times');

        // تنفيذ العمليات اللازمة مع البيانات المستلمة هنا

        // على سبيل المثال، يمكنك طباعة البيانات للتحقق منها
        echo "Services: " . implode(", ", $services) . "<br>";
        echo "Prices: " . implode(", ", $prices) . "<br>";
        echo "Currency: " . $currency . "<br>";
        echo "Occasions: " . implode(", ", $occasions) . "<br>";
        echo "Booking Times: " . implode(", ", $bookingTimes) . "<br>";
        return view('front.step2');
    }
    public function storeDetails(Request $request){
        // استرداد قيمة المصفوفة من الطلب
        $servicesArray = json_decode($request->input('services_array'));

        // استخدام المصفوفة كما ترغب
        foreach ($servicesArray as $service) {
            // افعل شيئًا مع كل عنصر في المصفوفة
            // ...
        }

        // رد على الطلب بنجاح
        return response()->json(['message' => 'تم حفظ البيانات بنجاح']);
    }
    public function handleFormSubmission(Request $request)
    {
        
    }
}
