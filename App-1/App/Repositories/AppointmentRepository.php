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
        VALUES('" .
            $request->date . "', 
           31)");

        // hacer fetch object
        $getAppointment_id =  $this->_db->query("SELECT id FROM appointments ORDER BY id DESC LIMIT 1")->fetch_array();
        foreach ($getAppointment_id as $id) {

            $appointment_id = $id;
        }
        foreach ($request->time as $time) {
            $defaulStatus = 0;
            $this->_db->query('INSERT INTO times (time,appointment_id,status) VALUES("' .
                $time . '","' .
                $appointment_id . '","' .
                $defaulStatus . '" 
            )');
        }
    }

    public function checkAppointment($request)
    {
        $date = $request->date;
        $appointment = $this->_db->query("SELECT * FROM appointments WHERE date = '$date' AND user_id = '31'")->fetch_array();

        if (!$appointment) {
            echo "date does not exits";
        }
        $getAppointment_id =  $this->_db->query("SELECT id FROM appointments where id = 81")->fetch_array();

        foreach ($getAppointment_id as $id) {
            $appointment_id = $id;
        };
        /** 
         * @comment: mappear esto con una clase,pendiente
         * @Date: 2021-05-31 18:24:13 
         * @param: 
         * @param: 
         * @return:string  
         */
        $times = $this->_db->query("SELECT * FROM times WHERE appointment_id = '$appointment_id'")->fetch_all();
        return  array($date, $times,$getAppointment_id);
        // var_dump($getAppointment_id);
        //  var_dump($appointment);
    }


    public function updateappointment($request)
    {
        $appointment_id = $request->id;
        $this->_db->query("DELETE FROM times where appointment_id = '$appointment_id'");

        foreach ($request->time as $time) {
            $defaulStatus = 0;
            $this->_db->query('INSERT INTO times (time,appointment_id,status) VALUES("' .
                $time . '","' .
                $appointment_id . '","' .
                $defaulStatus . '" 
            )');
        }
    }

    public function getAllAppointments()
    {
        $doctorAppointments = $this->_db->query("SELECT * FROM appointments WHERE user_id = '31'")->fetch_all();
        return $doctorAppointments;
    }
}
