<?php

namespace App\Models\Qaah;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Qaah\Facility;
use App\Models\Qaah\OfferHall;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Support\Arabic\Arabic;
use Illuminate\Support\Facades\Lang;

class Hall extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'discription',
        'people_count',
        'area',
        'facility_id'
    ];

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }

    public function offer_halls()
    {
        return $this->hasMany(OfferHall::class);
    }
    
    public function getMinimumOfferPrice()
    {
        return $this->offer_halls()->min('price');
    }
    public function getHallTimes()
    {
        $hallTimes = $this->offer_halls()->with('duration')->get();

        $times = [];
        foreach ($hallTimes as $hallTime) {
            $from = Carbon::parse($hallTime->duration->from)->locale('ar')->isoFormat('h:mm A');
            $to = Carbon::parse($hallTime->duration->to)->locale('ar')->isoFormat('h:mm A');

            $from = $this->translateToArabic($from);
            $to = $this->translateToArabic($to);

            $times[$hallTime->id] = [
                'time' => $from . ' - ' . $to,
                'price' => $hallTime->price,
            ];
        }

        return $times;
    }

public function translateToArabic($string)
{
    $englishStrings = ['AM', 'PM'];
    $arabicStrings = ['صباحًا', 'مساءً'];

    return str_replace($englishStrings, $arabicStrings, $string);
}
}
