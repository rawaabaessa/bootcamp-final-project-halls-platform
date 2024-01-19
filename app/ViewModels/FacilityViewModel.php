<?php

namespace App\ViewModels;

use Illuminate\Support\Collection;

class FacilityViewModel
{
    public $facility;
    public $firstImage;

    public function __construct($facility, $firstImage)
    {
        $this->facility = $facility;
        $this->firstImage = $firstImage;
    }
}