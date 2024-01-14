<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Qaah\Facility;
use App\Models\Qaah\Service;
use App\Models\Qaah\Duration;
use App\Models\Qaah\Occasion;
use App\Models\Content\Content;
use App\Models\Payment\Payment;
use Illuminate\Support\Facades\Validator;
use App\Models\Content\Socialmedia;
use Carbon\Carbon;


class ContentController extends Controller
{
    public function index(){
        $facility = Facility::where('user_id',auth()->id())->first();
        return view('tenant.content.index',compact('facility'));
    }
    public function service($name){
        // $hall = Hall::where('name',$name)->first();
        $facility = Facility::where('name',$name)->first();
        $services = Service::where('facility_id',$facility->id)
                            ->where('is_free',true)
                            ->get();
        return view('tenant.content.service',compact('services','facility'));
    }
    public function addService(Request $request){
        $rules = [
            'service' => 'required|string',
        ];
        $messages = [
            'service.required' => 'هذا الحقل مطلوب',
            'service.string' => 'قيمة غير صالحة',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $service = Service::create([
            'name' => $request->service ,
            'facility_id' => $request->id,
            'is_free' => true,
            'price' => 0
        ]);
        return redirect()->route('tenant.content.services', ['name' => $request->name])->with('success', 'تمت اضافة خدمة بنجاح');    
    }

    public function extraservice($name){
        // $hall = Hall::where('name',$name)->first();
        $facility = Facility::where('name',$name)->first();
        $services = Service::where('facility_id',$facility->id)
                            ->where('is_free',false)
                            ->get();
        return view('tenant.content.extraService',compact('services','facility'));
    }
    public function addExtraservice(Request $request){
        $rules = [
            'service' => 'required|string',
            'price' => 'required|integer',
        ];
        $messages = [
            'service.required' => 'هذا الحقل مطلوب',
            'service.string' => 'قيمة غير صالحة',
            'price.required' => 'هذا الحقل مطلوب',
            'price.string' => 'قيمة غير صالحة',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $service = Service::create([
            'name' => $request->service ,
            'facility_id' => $request->id,
            'is_free' => false,
            'price' => $request->price
        ]);
        return redirect()->route('tenant.content.extraservice', ['name' => $request->name])->with('success', 'تمت اضافة خدمة بنجاح');    
    }

    public function duration($name){
        $facility = Facility::where('name',$name)->first();
        $durations = Duration::where('facility_id',$facility->id)->get();
        // dd($durations);
        return view('tenant.content.duration',compact('durations','facility'));
    }
    public function addduration(Request $request){
        $rules = [
            'from' => 'required',
            'to' => 'required',
        ];
        $messages = [
            'from.required' => 'هذا الحقل مطلوب',
            'to.required' => 'هذا الحقل مطلوب',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $duration = Duration::create([
            'from' =>  $request->input('from') ,
            'to' =>  $request->input('to') ,
            'facility_id' => $request->id,
        ]);
        return redirect()->route('tenant.content.duration', ['name' => $request->name])->with('success', 'تمت اضافة فترة بنجاح');    
    }
    public function occasion($name){
        $facility = Facility::where('name',$name)->first();
        $occasions = Occasion::where('facility_id',$facility->id)->get();
        // dd($occasions);
        return view('tenant.content.Occasion',compact('occasions','facility'));
    }
    public function addoccasion(Request $request){
        $rules = [
            'name' => 'required',
        ];
        $messages = [
            'name.required' => 'هذا الحقل مطلوب',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $duration = Occasion::create([
            'name' =>  $request->occasion ,
            'facility_id' => $request->id,
        ]);
        return redirect()->route('tenant.content.occasion', ['name' => $request->name])->with('success', 'تمت اضافة مناسبة بنجاح');    
    }
    public function about($name){
        $facility = Facility::where('name', $name)->first();
        $about = Content::where('user_id', $facility->user_id)->first();

        if ($about) {
            $about = $about->discription;
        } else {
            $about = ""; // أو يمكنك تعيين أي قيمة ترغب فيها عندما لا يكون هناك صف في قاعدة البيانات
        }
        return view('tenant.content.about',compact('facility','about'));
    }
    public function editabout(Request $request){
        $rules = [
            'about' => 'required|min:250',
        ];
        $messages = [
            'about.required' => 'هذا الحقل مطلوب',
            'about.min' => 'يجب ان لايقل عن 250 حرف',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $user = Facility::where('name',$request->name)->first()->user_id;
        $about = Content::where('user_id', $user)->first();
        if ($about) {
            // يوجد صف، قم بتحديثه
            $about->update([
                'discription' => $request->about
            ]);
        } else {
            // لا يوجد صف، قم بإنشاء جديد
            Content::create([
                'user_id' => $user,
                'title' => " ",
                'discription' => $request->about,
                'type' => 'aboutus'
            ]);
        }
        return redirect()->route('tenant.content.about', ['name' => $request->name])->with('success', 'تم التحديث بنجاح');    
    }
    public function contact($name){
        $facility = Facility::where('name', $name)->first();
        return view('tenant.content.contact',compact('facility'));
    }
    public function editcontact(Request $request){
        $rules = [
            'email' => 'required',
            'phone' => 'required',
        ];
        $messages = [
            'email.required' => 'هذا الحقل مطلوب',
            'email.required' => 'هذا الحقل مطلوب',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $facility = Facility::where('name',$request->name)->first();
        $facility->update([
            'email' => $request->email,
            'phone' => $request->phone,
        ]);
        return redirect()->route('tenant.content.contact', ['name' => $request->name])->with('success', 'تم التحديث بنجاح');    
    }
    public function payment($name){
        $facility = Facility::where('name', $name)->first();
        $payments = Payment::where('facility_id',$facility->id)->get();
        // dd($payments);
        return view('tenant.content.payment',compact('facility','payments'));
    }
    public function addpayment(Request $request){
        $rules = [
            'name' => 'required',
            'number' => 'required',
        ];
        $messages = [
            'name.required' => 'هذا الحقل مطلوب',
            'number.required' => 'هذا الحقل مطلوب',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Payment::create([
            'name' => $request->account,
            'number'=> $request->number,
            'facility_id' => $request->id
        ]);
        
        return redirect()->route('tenant.content.payment', ['name' => $request->name])->with('success', 'تمت الاضافة بنجاح');
    }
    public function currency(){

    }
    public function socialmedia($name){
        $facility = Facility::where('name', $name)->first();
        $payments = Socialmedia::where('facility_id',$facility->id)->get();
        return view('tenant.content.socialmedia');
    }
    public function addsocialmedia(){

    }
    public function logo($name){
        $facility = Facility::where('name', $name)->first();
        return view('tenant.content.logo',compact('facility'));
    }
    public function editlogo(Request $request){
        $facility = Facility::where('name', $request->name)->first();
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $extension = $image->getClientOriginalExtension();
            $currentDate = Carbon::now()->format('Ymd_His');
            $newImageName = $currentDate . '_' . $image->getClientOriginalName();
        
            $image->storeAs('logo', $newImageName, 'public');
            $facility->logo = $newImageName; // تحديث الشعار
            $facility->save(); // حفظ التغييرات
            
            return redirect()->back()->with('success', 'تم تحديث الشعار بنجاح');
        }
        
        return redirect()->back()->with('error', 'حدث خطأ');
    }
}
