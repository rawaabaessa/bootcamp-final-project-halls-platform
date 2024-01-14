<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account\User;

class Content extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'discription',
        'type',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
