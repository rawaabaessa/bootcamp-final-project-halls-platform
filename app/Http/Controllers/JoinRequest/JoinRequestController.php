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
use App\Http\Requests\JoinRequest;
use Carbon\Carbon;

class JoinRequestController extends Controller
{
    public function viewInfo(){

        $Governorates = Governorate::all();
        $Directorates = Directorate::all();

        return view('front.joinRequest.facilityInfo',compact('Governorates', 'Directorates'));
    }
    public function storeInfo(JoinRequest $request){

        $file = $request->file('license');
        $filename = $file.Carbon::now()->timestamp;
        $path = $file->storeAs('public\upload\facility', $filename);
        Facility::create([
            'name' => $request->name,
            'title' => $request->title,
            'email' => $request->email,
            'address' => $request->address,
            'identity_NO' => $request->identity_NO,
            'phone' => $request->phone,
            'license'=>$request->$filename,
            'user_id' => 7 ,
            'directorate_id'=> $request->input('Governorate')
        ]);
        return redirect()->route('facilitydetails');
    }
    public function viewDetails(){
        return view('front.joinRequest.facilityDetails');
    }
    public function storeDetails(Request $request){
        
    }
}
