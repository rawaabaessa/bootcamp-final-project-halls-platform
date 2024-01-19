<?php

namespace App\Models\Reservation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Qaah\Hall;
use App\Models\Qaah\OfferHall;
use App\Models\Qaah\Occasion;
use App\Models\Qaah\Service;
use App\Models\Reservation\Order;
use App\Models\Reservation\State;
use App\Models\Account\User;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'offer_hall_id',
        'hall_id',
        'hall_price',
        'occasion_id',
        'date',
        'poeple_count',
        'voucher_id',
        'state_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function offerHall()
    {
        return $this->belongsTo(OfferHall::class, 'offer_hall_id');
    }

    public function hall()
    {
        return $this->belongsTo(Hall::class, 'hall_id');
    }

    public function occasion()
    {
        return $this->belongsTo(Occasion::class, 'occasion_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
    
    public function orders()
    {
        return $this->hasMany(Order::class)->with('service');
    }
    
}
