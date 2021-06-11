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

    /** 
     * @comment: show to the patients their bookings 
     * @Date: 2021-06-11 09:38:24 
     * @return:objects  
     */
    public function getPatientBooking()
    {
        $stmt = $this->_db->query("SELECT * FROM bookings where id_user = " . SessionHandler::getSession('SESSION_USER_ID') . "");

        while ($obj = $stmt->fetch_object('\\App\\Models\\booking')) {


            @$result[] = $obj;
        }

        return @($result);
    }

    /** 
     * @comment: show to admin all the bookings 
     * @Date: 2021-06-11 09:39:12 
     * @param: 
     * @param: 
     * @return:arrray of objects 
     */
    public function getAllPatientBookings()
    {
        $date = date('Y-m-d');
        $stmt = $this->_db->query("SELECT * FROM bookings WHERE date = '$date'");

        while ($obj = $stmt->fetch_object('\\App\\Models\\booking')) {


            @$result[] = $obj;
        }

        return @($result);
    }

    /** 
     * @comment:change the status of bookings when patient arrive 
     * @Date: 2021-06-11 09:39:47 
     * @return:bool  
     */
    public function changeStatus($id, $status)
    {
        $this->_db->query("UPDATE bookings  SET status = '$status' WHERE id ='$id'");
    }

    public function getPatientsBookingByParams()
    {
        $date = date('Y-m-d');
        $status = 1;
        $stmt = $this->_db->query("SELECT * FROM bookings WHERE date = '$date' and status = '$status'");

        while ($obj = $stmt->fetch_object('\\App\\Models\\booking')) {


            @$result[] = $obj;
        }

        return @($result);
    }
}
