<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Qaah\Facility;
use App\Models\Qaah\Hall;
use App\Models\Reservation\Reservation;
use App\Models\Account\User;

class TenantReservationController extends Controller
{
    public function index(){
        if (!Auth::check() || ! Auth::user()->roles->contains('name','admin')) {
            abort(403, 'Unauthorized');
        }

        $id = auth()->user()->id;
        $facility = Facility::where('user_id',$id)->first();
        // dd()
        return view('tenant.reservations.index',compact('facility'));
    }

    public function reservationList($name){
        if (!Auth::check() || ! Auth::user()->roles->contains('name','admin')) {
            abort(403, 'Unauthorized');
        }

        $hall = Hall::where('name',$name)->first();
        // dd($hall);
        $reservations = Reservation::where('hall_id',$hall->id)
                                    ->where('state_id','!=',1)
                                    ->get();
        return view('tenant.reservations.list',compact('reservations'));
    }
    public function view($id){
        $reservation = Reservation::where('id',$id)->first();
        $user = User::where('id',$reservation->user_id)->first();
        // dd($user);
        // $order = Order::where('reservation_id',$id)->get();
        return view('tenant.reservations.view',compact('reservation','user'));
    }
    public function confirm(Request $request){
        $reservation = Reservation::find($request->id);
        if ($reservation) {
            $reservation->state_id = 3;
            $reservation->save();
            
            return redirect()->back()->with('success', 'تم  قبول الحجز بنجاح');
        } else {
            return response()->json(['message' => 'الحجز غير موجود'], 404);
        }
    }
    public function reject(Request $request){
        $reservation = Reservation::find($request->id);

        if ($reservation) {
            $reservation->state_id = 4;
            $reservation->save();

            return redirect()->back()->with('success', 'تم  رفض الحجز بنجاح');
        } else {
            return response()->json(['message' => 'الحجز غير موجود'], 404);
        }
    }
}
