<?php

namespace App\Controllers\auth;
use Core\View;
use App\Services\UserService;

class Home extends \Core\Controller
{
    protected $_userService;

    public function __construct()
    {
    $this->_userService= new UserService;    
    }


    public function homeAction()
    {

        $doctors= $this->_userService->getDoctor();
        var_dump($doctors);
        View::bladeRenderTemplate('home/layouts/base',["doctors" =>$doctors]);
    }

    public function newAppointmentAction()
    {
        
    }
    
}