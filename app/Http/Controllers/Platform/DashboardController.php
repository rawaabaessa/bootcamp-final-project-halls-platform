<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qaah\Facility;
use App\Models\Qaah\Hall;
use App\Models\Reservation\Reservation;


class DashboardController extends Controller
{
    public function index(){
        $facility = Facility::count();
        $reservation = Reservation::count();
        $allcustomers = Reservation::all();
        $allcustomersUnique = $allcustomers->unique('user_id')->count();
        
        return view('platform.dashboard',compact('facility','reservation','allcustomersUnique'));
    }
}
