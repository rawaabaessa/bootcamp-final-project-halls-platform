<?php
namespace App\ViewModels;

class JoinRequest
{
    public $Facility;
    public $Directorate;
    public $Governorate;
    public $user;

    public function __construct($Facility, $user, $Directorate, $Governorate)
    {
        $this->Facility = $Facility;
        $this->user = $user;
        $this->Directorate = $Directorate;
        $this->Governorate = $Governorate;
    }
}