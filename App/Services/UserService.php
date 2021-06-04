<?php

namespace App\Services;

use App\Helpers\Request;
use Core\SessionHandler;
use App\Repositories\UserRepository;
use App\Validators\RequestValidation;
use Core\View;

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

    public function editDoctor()
    {

        if (Request::hasData('post')) {

            $request = Request::getData('post');

            return  $this->_userRepository->editDoctor($request);
        }
    }


    public function deleteDoctor()
    {

        if (Request::hasData('post')) {

            $request = Request::getData('post');

            return  $this->_userRepository->deleteDoctor($request);
        }
    }

    public function getDoctor()
    {
        return  $this->_userRepository->getDoctors();
    }
    public function login()
    {
        if (Request::hasData('post')) {

            $request = Request::getData('post');
            return $this->_userRepository->loginUser($request);
           
              
        }
    }
}
