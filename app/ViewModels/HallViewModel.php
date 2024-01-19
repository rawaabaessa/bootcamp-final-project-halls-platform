<?php

namespace App\ViewModels;

use Illuminate\Support\Collection;

class HallViewModel
{
    public $hall;
    public $firstImage;

    public function __construct($hall, $firstImage)
    {
        $this->hall = $hall;
        $this->firstImage = $firstImage;
    }
}