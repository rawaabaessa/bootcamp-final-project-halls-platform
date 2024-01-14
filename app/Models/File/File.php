<?php

namespace App\Models\File;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
        'fileType_id',
        'target_id',
        'target_name'
    ];
}
