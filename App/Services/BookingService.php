<?php

namespace App\Services;

use App\Helpers\Request;
use App\Repositories\BookingRepository;

class BookingService
{
    protected $_bookingRepository;

    function __construct(){
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
}