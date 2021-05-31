<?php

namespace App\Repositories;
use Core\Model;

class AppointmentRepository
{
    
    protected $_db;

    function  __construct()
    {
        $this->_db =  Model::getDB();
    }
    
    public function createAppointment($request)
    {
        $this->_db->query("INSERT INTO appointments (date,user_id )
        VALUES('".
           $request->date."', 
           32
         
           )
           
           ");
    }
}