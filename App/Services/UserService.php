<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Helpers\Request;
use App\Validators\RequestValidation;

class UserService
{

    protected $_userRepository;
    public $errors = [];

    public function __construct()
    {
        $this->_userRepository = new UserRepository;
    }


    public function getAll()
    {
        return  $this->_userRepository->getAll();
    }

    public function createUser()
    {

        if (Request::hasData('post')) {
            
            $request = Request::getData('post');

            return  $this->_userRepository->createUser($request);
        }
    }
    public function createDoctor()
    {

        if (Request::hasData('post')) {
            
            $request = Request::getData('post');

            return  $this->_userRepository->createDoctor($request);
        }
    }
}
