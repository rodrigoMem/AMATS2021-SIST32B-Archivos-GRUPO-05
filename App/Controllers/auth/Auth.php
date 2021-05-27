<?php

namespace App\Controllers\auth;

use Core\View;
use App\Services\UserService;

class Auth extends \Core\Controller
{
    protected $_userService;
    public function __construct()
    {
    $this->_userService= new UserService;    
    }
    public function registerAction()
    {
        $this->_userService->createUser();
        View::bladeRenderTemplate('auth/base');
    }
}