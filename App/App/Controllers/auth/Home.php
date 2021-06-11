<?php

namespace App\Controllers\auth;

use App\Helpers\Redirect;
use Core\View;
use App\Services\UserService;
use App\Services\BookingService;
use App\Services\AppointmentService;

class Home extends \Core\Controller
{
    protected $_userService;
    protected $_AppointmentService;
    protected $_bookingService;

    public function __construct()
    {
        $this->_userService = new UserService;
        $this->_appointmentService = new AppointmentService;
        $this->_bookingService = new BookingService;
    }


    public function homeAction()
    {
        
        $doctors = $this->_userService->getDoctor();
        View::bladeRenderTemplate('home/home', ["doctors" => $doctors]);
    }

    public function newAppointmentAction($id, $date)
    {
        $times = $this->_appointmentService->newPatientAppointment($id, $date);
        View::bladeRenderTemplate('home/appointment', ["date" => $date, "times" => $times, "doctor_id" => $id]);
    }

    public function createBookingAction()
    {
        $this->_bookingService->createBooking();
        Redirect::to(' ');
    }

    public function getPatientBookingAction()
    {
        $PatientBooking = $this->_bookingService->getPatientBooking();
        View::bladeRenderTemplate('patient/home',["patients"=>$PatientBooking]);

    }

    public function userProfileAction ()
    {
        $user = $this->_userService->checkCurrentUser();
        View::bladeRenderTemplate('patient/patientProfile',compact("user"));

    }

    public function editProfileAction()
    {
        $this->_userService->editProfile();
        Redirect::back();
        
    }
}
