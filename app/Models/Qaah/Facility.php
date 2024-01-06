<?php

namespace App\Models\Qaah;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
