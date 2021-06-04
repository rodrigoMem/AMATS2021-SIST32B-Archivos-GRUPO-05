<?php

namespace App\Controllers\auth;

use Core\View;
use Core\SessionHandler;
use App\Services\UserService;

class Auth extends \Core\Controller
{
    protected $_userService;


    public function __construct()
    {
        $this->_userService = new UserService;
    }

    public function registerAction()
    {
        $this->_userService->createUser();
        View::bladeRenderTemplate('auth/register');
    }
    public function loginAction()
    {
        $user =$this->_userService->login();
        var_dump( SessionHandler::getSession("SESSION_USER_NAME"));
        View::bladeRenderTemplate('auth/login');
    }
}
