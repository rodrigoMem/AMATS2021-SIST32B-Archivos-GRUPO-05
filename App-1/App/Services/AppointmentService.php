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

    public function checkAppointment()
    {
        if (Request::hasData('post')) {
            
            $request = Request::getData('post');

            return  $this->_appointmentRepository->checkAppointment($request);
        }
    }

    public function updateAppointment()
    {
        if (Request::hasData('post')) {
            
            $request = Request::getData('post');

            return  $this->_appointmentRepository->updateAppointment($request);
        }    
    }

    public function getAllAppointment()
    {
       

            return  $this->_appointmentRepository->getAllAppointments();
    }

    public function newAppointment()
    {
        
    }
}