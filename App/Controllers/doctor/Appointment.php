<?php

namespace App\Controllers\doctor;
use \Core\View;
use \App\Services\AppointmentService;
class Appointment extends \Core\Controller
{

    protected  $_appointmentService;

    public function __construct()
    {

        $this->_appointmentService =  new AppointmentService;
    }

    public function createAction()
    {
         $this->_appointmentService->createAppointment();

View::bladeRenderTemplate('doctor/appoinmentsTable');
    }
}