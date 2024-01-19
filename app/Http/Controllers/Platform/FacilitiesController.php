<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qaah\Facility;
use App\Models\Account\User;
use App\Models\Location\Directorate;
use App\Models\Location\Governorate;
use App\ViewModels\JoinRequest as JoinVM;

class FacilitiesController extends Controller
{
    public function index(){
        $facilities = Facility::where('state','approved')->paginate(3);
        return view('platform.halls.index',compact('facilities'));
    }
    public function view($name){
        $Facility = Facility::where('name',$name)->first();
        $user = User::findOrFail($Facility->user_id);

        $Directorate = Directorate::findOrFail($Facility->directorate_id)->first();
        $Governorate = Governorate::findOrFail($Directorate->governorate_id)->first();
 
        $viewModel = new JoinVM($Facility, $user, $Directorate, $Governorate);        
        return view('platform.halls.view')->with(['viewModel' => $viewModel]);
    }
}
