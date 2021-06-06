<?php

namespace App\Services;

use Core\View;
use App\Helpers\Request;
use Core\SessionHandler;
use App\Helpers\Redirect;
use App\Repositories\UserRepository;
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
        $doctors = array_slice($this->_userRepository->getDoctors(),0,5);
        return $doctors ;
    }

    public function login()
    {
        if (Request::hasData('post')) {

            $request = Request::getData('post');
            $user = $this->_userRepository->loginUser($request);

            if ($user) {
                if (!password_verify($request->password, $user->password)) {
                    return "credentials are no correct";
                } else {

                    SessionHandler::addSession("SESSION_USER_ID", $user->id);
                    SessionHandler::addSession("SESSION_USER_NAME", $user->name);
                    $this->redirectUser($user->role_id);
                }
            }
        }
    }

    public function logout()
    {
        if (isAuthenticated()) {
            SessionHandler::removeSession("SESSION_USER_NAME");
            SessionHandler::removeSession("SESSION_USER_ID");
        }
        Redirect::to(" ");
    }

    public function checkCurrentUser()
    {
        return $this->_userRepository->checkCurrentUser();
    }

    public function redirectUser($user)
    {
        switch ($user) {
            case '1':
                Redirect::to("admin/get-doctors");

                break;
            case '2':
                Redirect::to("doctor/create-schedule");

                break;
            case '3':
                Redirect::to(" ");

                break;

            default:
                Redirect::to(" ");
                break;
        }
    }
}
