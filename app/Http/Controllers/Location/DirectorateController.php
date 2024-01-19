<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location\Directorate;

class DirectorateController extends Controller
{
    public function getDirectorates(Request $request)
    {
        $governorateId = $request->input('governorate_id');

        // جلب المدن المرتبطة بالمحافظة باستخدام القيمة $governorateId
        $directorates = Directorate::where('governorate_id', $governorateId)->get();

        return response()->json($directorates);
    }
}
