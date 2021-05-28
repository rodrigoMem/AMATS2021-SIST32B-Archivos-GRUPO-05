<?php
/** 
 * @comment:CREAR UN REPOSITORIO GENERICO PARA ESTO
 * @Date: 2021-05-24 10:35:46 
 */

namespace App\Repositories;

use Core\Model;

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

            $stmt = $this->_db->query('SELECT name,image,email,address,phone_number FROM users');
            while ($obj = $stmt->fetch_object('\\App\\Models\\user')) {
                // $result[] = [$obj->id, $obj->name];


               @$result[] = $obj; 
            }
           // var_dump($result);
            
            return @($result) ;
        } catch (MYSQLI_DOException $e) {
            echo $e->getMessage();
        }
    }

    public function createUser($request){
        $stmt = $this->_db->query('INSERT INTO users (name,password )
         VALUES("'.
            $request->name.'","'.
            $request->password.'")
            ');

    }

    public function createDoctor($request){
         $this->_db->query('INSERT INTO users (name,email,password,role_id,address,phone_number )
         VALUES("'.
            $request->name.'","'.
            $request->email.'","'.
            $request->password.'","'.
            $request->role_id.'","'.
            $request->address.'","'.
            $request->phone.'"
            )
            
            ');

    }
}
