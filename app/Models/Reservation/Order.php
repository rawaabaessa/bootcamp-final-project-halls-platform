<?php

namespace App\Models\Reservation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Qaah\Service;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'reservation_id',
        'price'
    ];
    
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
