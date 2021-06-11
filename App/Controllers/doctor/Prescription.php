<?php

namespace App\Controllers\doctor;

use Core\View;
use App\Services\BookingService;

class Prescription
{
    protected $_bookingService;

    public function __construct()
    {
    $this->_bookingService = new BookingService;    
    }
    
    public function getPatientsAction()
    {
        $patients = $this->_bookingService->getPatientBookingsbyParams();
        View::bladeRenderTemplate("doctor/patientTable",compact('patients'));
    }
}