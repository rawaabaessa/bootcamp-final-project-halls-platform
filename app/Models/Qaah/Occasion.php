<?php

namespace App\Models\Qaah;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occasion extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'facility_id',
    ];
}
