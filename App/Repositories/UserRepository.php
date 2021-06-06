<?php

/** 
 * @comment:CREAR UN REPOSITORIO GENERICO PARA ESTO
 * @Date: 2021-05-24 10:35:46 
 */

namespace App\Repositories;

use App\Helpers\Redirect;
use Core\View;
use Core\Model;
use Core\SessionHandler;

class UserRepository
{
    protected $_db;

    function  __construct()
    {
        $this->_db =  Model::getDB();
    }


    public  function getAll()
    {
        try {

            $stmt = $this->_db->query('SELECT id,name,image,email,address,phone_number FROM users');
            while ($obj = $stmt->fetch_object('\\App\\Models\\user')) {
                // $result[] = [$obj->id, $obj->name];


                @$result[] = $obj;
            }
            // var_dump($result);

            return @($result);
        } catch (MYSQLI_DOException $e) {
            echo $e->getMessage();
        }
    }

    public function createUser($request)
    {
        $role_id = 3;
        $this->_db->query('INSERT INTO users (name,password,email,role_id )
         VALUES("' .
            $request->name . '","' .
            trim(password_hash($request->password, PASSWORD_DEFAULT)) . '","' .
            $request->email . '","' . $role_id . '")
            ');
    }

    public function loginUser($request)
    {
        $stmt = $this->_db->query("SELECT id,name,email,password,role_id FROM users  WHERE name = '$request->name' ");
        $user = $stmt->fetch_object('\\App\\Models\\user');


        return $user;
    }


    public function createDoctor($request)
    {
        $this->_db->query('INSERT INTO users (name,email,password,role_id,address,phone_number )
         VALUES("' .
            $request->name . '","' .
            $request->email . '","' .
            $request->password . '","' .
            $request->role_id . '","' .
            $request->address . '","' .
            $request->phone . '"
            )
            
            ');
    }
    public function editDoctor($request)
    {
        $this->_db->query("UPDATE  users SET name= '$request->name' WHERE id= '$request->id'");
    }

    public function deleteDoctor($request)
    {
        $this->_db->query("DELETE  FROM users  WHERE id= '$request->id'");
    }

// move this to appointmentsrepo
    public function getDoctors()
    {
        $stmt = $this->_db->query('SELECT appointments.id, appointments.date,  users.name,users.id,users.email
        FROM  appointments
        JOIN users ON appointments.user_id=users.id')->fetch_all();
        return $stmt;
    }

    public function checkCurrentUser()
    {
        $stmt = $this->_db->query("SELECT id,name,email FROM users  WHERE id = " . SessionHandler::getSession("SESSION_USER_ID") . "");
        $user = $stmt->fetch_object('\\App\\Models\\user');

        return $user;
    }
}
