<?php

namespace App\Http\Controllers\Tenant;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Qaah\Hall;
use App\Models\Qaah\Facility;
use App\Models\Qaah\Duration;
use App\Models\Qaah\OfferHall;
use App\Models\File\File;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class HallController extends Controller
{
    public function index(){
        if (!Auth::check() || ! Auth::user()->roles->contains('name','admin')) {
            abort(403, 'Unauthorized');
        }
        $id = auth()->user()->id;
        $facility = Facility::where('user_id',$id)->first();
        $halls = Hall::where('facility_id',$facility->id)->get();

        return view('tenant.halls.index',compact('halls'));
    }
    public function view($name){
        $hall = Hall::where('name',$name)->first();
        $durations = OfferHall::where('hall_id',$hall->id)->get();
        $images = File::where('target_id',$hall->id)->get();
        // echo "<pre>";
        // print_r($images);
        // echo "</pre>";
        // dd($images);
        return view('tenant.halls.view',compact('hall','durations','images'));
    }
    public function add(){
        $facility = Facility::where('user_id', auth()->id())->first();

        if ($facility) {
            $durations = Duration::where('facility_id', $facility->id)->get();
            
            return view('tenant.halls.add', compact('durations'));
        } else {
            // Handle the case when the facility is not found
        }
    }
    public function store(Request $request){

        $rules = [
            'name' => 'required|unique:halls',
            'title' => 'required',
            'discription' => 'required',
            'people_count' => 'required',
            'area' => 'required',
            'image' => 'required|array|min:4',
        ];

        // Define custom error messages
        $messages = [
            'name.required' => 'هذا الحقل مطلوب',
            'name.unique' => 'الاسم موجود مسبقا',
            'title.required' => 'هذا الحقل مطلوب',
            'discription.required' => 'هذا الحقل مطلوب',
            'people_count.required' => 'هذا الحقل مطلوب',
            'area.required' => 'هذا الحقل مطلوب',
            'image.required' => 'يجب رفع 4 صور على الأقل',
            'image.array' => 'حقل الصور يجب أن يكون مصفوفة',
            'image.min' => 'يجب رفع 4 صور على الأقل',
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // dd($request->file('image'));
        // if ($request->hasFile('image') && count($request->file('image')) < 4){
        //     return redirect()->back()->with('error', 'يجب رفع 4 صور على الأقل');
        // }

        $id = auth()->user()->id;
        $facility_id = Facility::where('user_id',$id)->first()->id;
        $hall = Hall::create([
            'name' => $request->name,
            'title' => $request->title,
            'discription' => $request->discription,
            'people_count' => $request->people_count,
            'area' => $request->area,
            'facility_id' => $facility_id,
        ]);
        foreach ($request->input('prices') as $durationId => $price) {
            OfferHall::create([
                'hall_id' => $hall->id,
                'duration_id' => $durationId,
                'price' => $price
            ]);
        }
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $extension = $image->getClientOriginalExtension();
                $currentDate = Carbon::now()->format('Ymd_His');
                $newImageName = $currentDate . '_' . $image->getClientOriginalName();
                
                $image->storeAs('images', $newImageName, 'public');
                $file = File::create([
                    'path' => $newImageName,
                    'fileType_id' => 1,
                    'target_id' => $hall->id,
                    'target_name' => 'hall',
                ]);
            }
            // return redirect()->back()->with('success', 'تم حفظ الصور بنجاح');
        } else {
            return redirect()->back()->with('image', 'يجب رفع 4 صور على الأقل');
        }
        return redirect()->route('tenant.hall');
    }
    public function edit($name){
        $hall = Hall::where('name',$name)->first();
        $durations = OfferHall::where('hall_id',$hall->id)->get();
        $images = File::where('target_id',$hall->id)->get();

        // dd($name);
        return view('tenant.halls.edit', compact('hall','durations','images'));
    }
    public function update(Request $request){
        $rules = [
            'title' => 'required',
            'discription' => 'required',
            'people_count' => 'required',
            'area' => 'required',
        ];

        // Define custom error messages
        $messages = [
            'title.required' => 'هذا الحقل مطلوب',
            'discription.required' => 'هذا الحقل مطلوب',
            'people_count.required' => 'هذا الحقل مطلوب',
            'area.required' => 'هذا الحقل مطلوب',
        ];

        // Validate the request data
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $hall = Hall::find($request->id)->first(); 

        if ($hall) {
            $hall->title = $request->title;
            $hall->discription = $request->discription;
            $hall->people_count = $request->people_count;
            $hall->area = $request->area;
            $hall->save(); // قم بحفظ التغييرات
            }
        return redirect()->route('tenant.hall')->with('success','تم التحديث بنجاح');
    }

}
