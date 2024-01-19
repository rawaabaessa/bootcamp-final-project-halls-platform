<?php

namespace App\Http\Controllers\Reservation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Qaah\Hall;
use App\Models\Qaah\OfferHall;
use App\Models\Qaah\Service;
use App\Models\File\File;
use App\Models\Reservation\Reservation;
use App\Models\Reservation\Order;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index(){

    }
    public function reservationList(){

    }
    public function reservationCheck(Request $request){
        
        $rules = [
            'duration' => 'required',
            'date' => 'required',
            'poeple' => 'required',
            'occasions' => 'required',
        ];
        $messages = [
            'duration.required' => 'هذا الحقل مطلوب',
            'date.required' => 'هذا الحقل مطلوب',
            'poeple.required' => 'هذا الحقل مطلوب',
            'occasions.required' => 'هذا الحقل مطلوب',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $poeple = Hall::where('id',$request->id)->first()->people_count;
                if($request->input('poeple') > $poeple){
                    return redirect()->back()->withErrors(['poeple.count' => 'عدد المدعوين يتجاوز طاقة القاعة']);
                }

        if (auth()->check()) {
            $bookingExists = Reservation::where('hall_id', $request->id)
                            ->where('date', $request->input('date'))
                            ->where('offer_hall_id', $request->input('duration'))
                            ->first();

            if ($bookingExists) {
                $stateId = $bookingExists->state_id;
                if ($stateId == 2 || $stateId == 3) {
                    // الفترة محجوزة أو قيد المراجعة
                    return redirect()->back()->withErrors(['error' => 'الفترة محجوزة, يرجى اختيار فترة أخرى.']);
                }
                if ($stateId == 4 || $stateId == 5) {
                    // الفترة ملغية أو  مرفوضة
                    $reservation = Reservation::create([
                        'user_id' => auth()->id(),
                        'offer_hall_id' => $request->input('duration'),
                        'hall_id' => $request->id,
                        'hall_price' => OfferHall::where('id',$request->input('duration'))->first()->price,
                        'occasion_id' => $request->input('occasions'),
                        'date' => $request->input('date'),
                        'poeple_count' => $request->input('poeple'),
                        'state_id' => 1
                    ]);
                    $selectedServices = $request->input('extra');
                    $selectedServicesop = $request->input('service');
    
                    // حفظ الخدمات المحددة في قاعدة البيانات
                    if (!empty($selectedServices)) {
                        foreach ($selectedServices as $serviceId) {
                            order::create([
                                'service_id' => $serviceId,
                                'reservation_id' => $reservation->id,
                                'price' => Service::where('id',$serviceId)->first()->price,
                            ]);
                        }
                    }
    
                    if (!empty($selectedServicesop)) {
                        foreach ($selectedServicesop as $serviceId) {
                            order::create([
                                'service_id' => $serviceId,
                                'reservation_id' => $reservation->id,
                                'price' => Service::where('id',$serviceId)->first()->price,
                            ]);
                        }
                    }
                    return redirect()->route('user.reservation',['id'=>$reservation->user_id]);
                }
                if($stateId == 1){

                    return redirect()->back()->withErrors(['error' => 'الفترة محجوزة, يرجى اختيار فترة أخرى.']);
                }
            } 
            else {
                
                $reservation = Reservation::create([
                    'user_id' => auth()->id(),
                    'offer_hall_id' => $request->input('duration'),
                    'hall_id' => $request->id,
                    'hall_price' => OfferHall::where('id',$request->input('duration'))->first()->price,
                    'occasion_id' => $request->input('occasions'),
                    'date' => $request->input('date'),
                    'poeple_count' => $request->input('poeple'),
                    'state_id' => 1
                ]);
                $selectedServices = $request->input('extra');
                $selectedServicesop = $request->input('service');

                // حفظ الخدمات المحددة في قاعدة البيانات
                if (!empty($selectedServices)) {
                    foreach ($selectedServices as $serviceId) {
                        order::create([
                            'service_id' => $serviceId,
                            'reservation_id' => $reservation->id,
                            'price' => Service::where('id',$serviceId)->first()->price,
                        ]);
                    }
                }

                if (!empty($selectedServicesop)) {
                    foreach ($selectedServicesop as $serviceId) {
                        order::create([
                            'service_id' => $serviceId,
                            'reservation_id' => $reservation->id,
                            'price' => Service::where('id',$serviceId)->first()->price,
                        ]);
                    }
                }
                return redirect()->route('user.reservation',['id'=>$reservation->user_id]);
            }
        } 
        else {
            return redirect()->route('signup.view');
        }
    }
    //show user reservations
    public function userReservations(){
    $user=auth()->id();
    $reservations = Reservation::where('user_id',$user)
                                ->orderBy('id', 'desc')
                                ->paginate(3);
    // dd($reservations);
    return view('user.reservations.index',compact('reservations'));
    }

    public function reservationDetails($id){
        $reservation = Reservation::where('id',$id)->first();
        // $hall = Hall::where('id',$reservation->hall_id)->first();
        $image = File::where('target_id',$reservation->hall_id)
                        ->where('target_name','hall')
                        ->first();
        $voucher = File::where('target_id',$reservation->id)
                        ->where('target_name','reservation')
                        ->first();
        // $order = Order::where('reservation_id',$id)->get();
        return view('user.reservations.confirmation',compact('reservation','image','voucher'));
    }

    public function upload(Request $request){

        // Validate and store the uploaded file
        $reservation = Reservation::where('id',$request->id)->first();

        // Create a new image record in the database
        if ($request->hasFile('voucher')) {
            $image = $request->file('voucher');
            $extension = $image->getClientOriginalExtension();
            $currentDate = Carbon::now()->format('Ymd_His');
            $newImageName = $currentDate . '_' . $image->getClientOriginalName();
            
            // $path = $request->file('voucher')->storeAs('storage/upload');
            $image->storeAs('reservation', $newImageName, 'public');
            $file = File::create([
                'path' => $newImageName,
                'fileType_id' => 1,
                'target_id' => $request->id,
                'target_name' => 'reservation',
            ]);
            $reservation->voucher_id = $file->id;
            $reservation->state_id = 2;
            $reservation->save();
            return redirect()->route('user.reservation')->with('success', 'تمت العملية بنجاح');
        }
    }
    public function reservationCancel(Request $request){
        $reservation = Reservation::where('id', $request->id)->first();
    
        if ($reservation) {
            $reservation->state_id = 4;
            $reservation->save();
            return redirect()->route('user.reservation')->with('success', 'تم إلغاء الحجز بنجاح.');
        }
    }
}
