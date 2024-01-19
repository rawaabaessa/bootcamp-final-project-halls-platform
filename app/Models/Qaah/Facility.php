<?php

namespace App\Models\Qaah;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account\User;
use App\Models\Qaah\Hall;
use App\Models\Qaah\Occasion;
use App\Models\Qaah\Duration;
use App\Models\Qaah\Service;
use App\Models\Location\Directorate;
use App\Models\Payment\Payment;


class Facility extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'email',
        'address',
        'logo',
        'license',
        'user_id',
        'directorate_id',
        'phone',
        'identity_NO',
        'currency',
        'state',
    ];
    public function halls()
    {
        return $this->hasMany(Hall::class);
    }
   
    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function Occasions()
    {
        return $this->hasMany(Occasion::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
    public function directorate()
    {
        return $this->belongsTo(Directorate::class);
    }
    public function durations()
    {
        return $this->hasMany(Duration::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
