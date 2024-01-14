<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Qaah\Facility;

class FacilitiesController extends Controller
{
    public function index(){
        $facilities = Facility::where('state','approved')->get();
        return view('platform.halls.index',compact('facilities'));
    }
}
