<?php

namespace App\Repositories;

use Core\Model;
use Core\SessionHandler;

class BookingRepository
{
    public function __construct()
    {
        $this->_db =  Model::getDB();
    }

    public function createBooking($request)
    {
        /** 
         * @comment: hacer un rollback en caso de que una de las dos no entre
         * @Date: 2021-06-05 23:12:22 
         * @return:void  
         */
        $this->_db->query('INSERT INTO bookings (time,date , id_user, id_doctor ) VALUES("' . $request->time . '","' . $request->date . '","' . SessionHandler::getSession("SESSION_USER_ID") . '","' . $request->doctor_id . '")');
        $this->_db->query("UPDATE times  SET status = '1' WHERE time ='$request->time' AND appointment_id ='$request->appointment_id'");
    }

    public function getPatientBooking()
    {
        $stmt = $this->_db->query("SELECT * FROM bookings where id_user = ".SessionHandler::getSession('SESSION_USER_ID')."");

        while ($obj = $stmt->fetch_object('\\App\\Models\\booking')) {


            @$result[] = $obj;
        }

        return @($result);
    }


    public function getAllPatientBookings()
    {
        $date = date('Y-m-d');
        $stmt = $this->_db->query("SELECT * FROM bookings WHERE date = '$date'");

        while ($obj = $stmt->fetch_object('\\App\\Models\\booking')) {


            @$result[] = $obj;
        }

        return @($result);
    }


    public function changeStatus($id,$status)
    {
            $this->_db->query("UPDATE bookings  SET status = '$status' WHERE id ='$id'");

        

        

    }
}


