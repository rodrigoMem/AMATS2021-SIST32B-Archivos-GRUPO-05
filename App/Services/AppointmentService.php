<?php

namespace App\Services;
use App\Repositories\AppointmentRepository;
use App\Helpers\Request;

class AppointmentService
{
    protected $_appointmentRepository;

    public function __construct()
    {
        $this->_appointmentRepository = new AppointmentRepository;
    }

    public function createAppointment()
    {
        if (Request::hasData('post')) {
            
            $request = Request::getData('post');

            return  $this->_appointmentRepository->createAppointment($request);
        }
    } 
}