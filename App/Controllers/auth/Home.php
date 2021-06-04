<?php

namespace App\Controllers\auth;

use App\Services\AppointmentService;
use Core\View;
use App\Services\UserService;

class Home extends \Core\Controller
{
    protected $_userService;
    protected $_AppointmentService;

    public function __construct()
    {
        $this->_userService = new UserService;
        $this->_appointmentService = new AppointmentService;
    }


    public function homeAction()
    {

        $doctors = $this->_userService->getDoctor();
        View::bladeRenderTemplate('home/home', ["doctors" => $doctors]);
    }

    public function newAppointmentAction($id, $date)
    {


        $times = $this->_appointmentService->newPatientAppointment($id, $date);
        View::bladeRenderTemplate('home/appointment',["date" => $date,"times"=>$times]);
    }
}
