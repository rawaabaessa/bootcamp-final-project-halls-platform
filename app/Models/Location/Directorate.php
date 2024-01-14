<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location\Governorate;

class Directorate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'label',
        'governorate_id'
    ];
    public function governorate()
    {
        return $this->belongsTo(Governorate::class);
    }
}
