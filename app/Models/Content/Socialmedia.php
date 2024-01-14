<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socialmedia extends Model
{
    use HasFactory;
    protected $fillable = [
        'link' ,
        'type',
        'user_id'
    ];
}
