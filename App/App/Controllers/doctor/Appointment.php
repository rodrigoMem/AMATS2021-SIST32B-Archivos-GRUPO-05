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

    public function checkAppointmentAction()
    {
        $times = $this->_appointmentService->checkAppointment();

        View::bladeRenderTemplate('doctor/checkAppointment',['times' => $times]);
        
    }

    public function updateAppointmentAction()
    {
          $this->_appointmentService->updateAppointment();
          View::bladeRenderTemplate('doctor/checkAppointment');
        
    }
     public function getAllAction()
     {
       $appoinments = $this->_appointmentService->getAllAppointment();
        View::bladeRenderTemplate('doctor/doctorAppointments',["appointments" => $appoinments]);
     }
}
