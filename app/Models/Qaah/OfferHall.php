<?php

namespace App\Models\Qaah;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Qaah\Hall;
use App\Models\Qaah\Duration;

class OfferHall extends Model
{
    use HasFactory;
    protected $fillable = [
        'hall_id',
        'duration_id',
        'price'
    ];
    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }

    public function duration()
    {
        return $this->belongsTo(Duration::class, 'duration_id');
    }
    
}
