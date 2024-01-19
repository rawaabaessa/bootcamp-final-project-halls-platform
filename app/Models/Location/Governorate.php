<?php

namespace App\Models\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location\Directorate;

class Governorate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'label'
    ];
    public function directorates()
    {
        return $this->hasMany(Directorate::class, 'governorate_id');
    }
}
