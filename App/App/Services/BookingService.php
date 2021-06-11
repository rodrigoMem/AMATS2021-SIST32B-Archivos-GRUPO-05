<?php

namespace App\Services;

use App\Helpers\Request;
use App\Repositories\BookingRepository;

class BookingService
{
    protected $_bookingRepository;

    function __construct()
    {
        $this->_bookingRepository = new BookingRepository;
    }

    public function createBooking()
    {
        if (Request::hasData('post')) {

            $request = Request::getData('post');
            $user = $this->_bookingRepository->createBooking($request);
            return $user;
        }
    }


    public function getPatientBooking()
    {
        $patientBooking = $this->_bookingRepository->getPatientBooking();
        return $patientBooking;
    }
    public function getallPatientBookings()
    {
        $bookings = $this->_bookingRepository->getallPatientBookings();
        return $bookings;
    }

    public function changeStatus($id)
    {
        $getstatus = $this->getallPatientBookings();
        foreach ($getstatus as $status) {
            // if it is not false
            if ($status->status =!$status->status) {
                
                $status = $this->_bookingRepository->changeStatus($id, $status->status);
            } else {
                $status = $this->_bookingRepository->changeStatus($id, $status->status);
            }
        }
        return $status;
    }
}
