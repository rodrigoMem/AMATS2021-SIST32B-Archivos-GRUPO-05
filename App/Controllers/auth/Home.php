<?php

namespace App\Controllers\auth;
use Core\View;

class Home extends \Core\Controller
{
    public function homeAction()
    {
        View::bladeRenderTemplate('home/layouts/base');
    }
}