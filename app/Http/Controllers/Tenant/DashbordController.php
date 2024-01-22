<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation\Reservation;
use App\Models\Qaah\Facility;
use App\Models\Qaah\Hall;


class DashbordController extends Controller
{
    public function index(){
        $userId = Auth::id();
        $facilityId = Facility::where('user_id',$userId)->first();
        // $facility = Facility::with('halls.reservations')->find($facilityId);
        $facility = Facility::with('halls.reservations')->find($facilityId->id);

        $reservationsCount = $facility->halls->sum(function ($hall) {
            return $hall->reservations->count();
        });

        $halls = Hall::where('facility_id',$facility->id)->count();

        $uniqueCustomersCount = $facility->halls->flatMap(function ($hall) {
            return $hall->reservations->pluck('user_id')->unique();
        })->count();

        return view('tenant.dashboard',compact('reservationsCount','halls','uniqueCustomersCount'));
    }
}
