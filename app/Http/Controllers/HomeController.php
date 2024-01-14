<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location\Directorate;
use App\Models\Location\Governorate;
use App\Models\Qaah\Facility;
use App\Models\Qaah\Hall;
use App\Models\Account\User;
use App\Models\Reservation\Reservation;
use App\Http\Requests\reservationRequest;
use Illuminate\Support\Facades\Validator;
use App\Mail\MyEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\File\File;


class HomeController extends Controller
{
    public function show()
    {
        $options = [];
        $governorates = Governorate::all();

        foreach ($governorates as $governorate) {
            $directorates = Directorate::where('governorate_id', $governorate->id)->get();
            foreach ($directorates as $directorate) {
                $option = $governorate->name . ' - ' . $directorate->name;
                $options[$directorate->id] = $option;
            }
        }
        return view("front.home", compact('options'));
    }
    public function search(Request $request){
        $search = $request->search;
        $directorates = Directorate::where('name', 'like', '%'.$search.'%')->get();
        // print"<pre>"; print_r($directorate); print"</pre>"; exit;
        $ids = array();
        
        //هنا لازم يكون المكلا ديفولت
        if($directorates != null){
            foreach ($directorates as $key => $directorate) {
                array_push($ids, $directorate->id);
            }
            // foreach ($directorates as $key => $directorate) {
                $facilities = Facility::whereIn('directorate_id', $ids)->get();
                // $viewModels = [];

                // foreach ($facilities as $facility) {
                //     $firsthall = $facility->halls->first();
                //     $firstImage = File::where('target_id',$firsthall->id)->first()->path;
                //     $viewModel = new FacilityViewModel($facility, $firstImage);
                //     $viewModels[] = $viewModel;
                // }
            // }
        }else{
            $facilities = null;
        }
        return view('front.facilities',compact('facilities'));
    }
    public function main($name){
        $facility = Facility::where('name', $name)->first();
        $user = User::where('id',$facility->user_id)->first();
        // $rooms = $facility->halls;

        return view('front.mainhall', compact('facility','user'));
    }

    public function details($name){
        $hall = Hall::where('name', $name)->first();
        $images = File::where('target_id',$hall->id)->where('target_name','hall')->get();
        return view('front.halldetails',compact('hall','images'));
    }
    
    public function sendEmail()
    {
        $name = 'John Doe';
        $message = 'Welcome to our website!';

        Mail::to('mayulee524@gmail.com')->send(new MyEmail($name, $message));

        return 'Email sent successfully!';
    }
}
