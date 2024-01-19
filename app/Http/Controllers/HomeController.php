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
use App\ViewModels\FacilityViewModel;
use App\ViewModels\HallViewModel;


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
        // $facilities = Facility::distinct('directorate_id')
        //                         ->orderBy('directorate_id')
        //                         ->take(3)
        //                         ->get();
        $directorateIds = Facility::distinct('directorate_id')
                          ->orderBy('directorate_id')
                          ->take(3)
                          ->pluck('directorate_id');

        $firstFacilities = Facility::whereIn('directorate_id', $directorateIds)
                                ->orderBy('directorate_id')
                                ->get()
                                ->groupBy('directorate_id')
                                ->map(function ($group) {
                                    return $group->first();
                                });
                                $viewModels = [];
                                foreach ($firstFacilities as $facility) {
                                    $firsthall = $facility->halls->first();
                                    // dd($firsthall);
                                    $firstImage = File::where('target_id',$firsthall->id)
                                                        ->where('target_name','hall')
                                                        ->first();
                                    $viewModel = new FacilityViewModel($facility, $firstImage);
                                    $viewModels[] = $viewModel;
                                }
        return view("front.home", compact('options','viewModels'));
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
                $facilities = Facility::whereIn('directorate_id', $ids)
                                        ->has('halls')
                                        ->get();
                $viewModels = [];

                foreach ($facilities as $facility) {
                    $firsthall = $facility->halls->first();
                    $firstImage = File::where('target_id',$firsthall->id)
                                        ->where('target_name','hall')
                                        ->first();
                    $viewModel = new FacilityViewModel($facility, $firstImage);
                    $viewModels[] = $viewModel;
                }
            // }
        }else{
            $facilities = null;
        }
        return view('front.facilities',compact('viewModels'));
    }
    public function main($name){
        $facility = Facility::where('name', $name)->first();
        // dd($facility);
        $halls = Hall::where('facility_id',$facility->id)->get();
        $user = User::where('id',$facility->user_id)->first();
        $halls = Hall::where('facility_id', $facility->id)->get();
        $viewModels = [];
        // dd($halls);
        // dd($user->content->discription);
        foreach ($halls as $hall) {
            // dd($halls);
            $firstImage = File::where('target_id', $hall->id)
                                ->where('target_name','hall')
                                ->first();
            $viewModel = new HallViewModel($hall, $firstImage);
            $viewModels[] = $viewModel;
        }
        // $rooms = $facility->halls;

        return view('front.mainhall', compact('facility','user','viewModels'));
    }

    public function details($name){
        $hall = Hall::where('name', $name)->first();
        $images = File::where('target_id',$hall->id)->where('target_name','hall')->get();
        return view('front.halldetails',compact('hall','images'));
    }
    
    // public function sendEmail()
    // {
    //     $name = 'John Doe';
    //     $message = 'Welcome to our website!';

    //     Mail::to('mayulee524@gmail.com')->send(new MyEmail($name, $message));

    //     return 'Email sent successfully!';
    // }
}
