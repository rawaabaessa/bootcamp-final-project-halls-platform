<?php

namespace App\Models\Qaah;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation\Order;
class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'facility_id',
        'is_free',
        'price'
    ];
    // public function orders()
    // {
    //     return $this->hasMany(Order::class, 'service_id')->where('is_free', true);
    // }
    public function orders(){
        return $this->hasMany(Order::class)->with('service')->whereHas('service', function ($query) {
            $query->where('is_free', false);
        })->get();
    }
}
