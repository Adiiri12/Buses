<?php
    class Booking {
        private $booking_id;
        private $customer_id;
        private $driver_id;
        private $numberOfPassengers;
        private $destanation;
        private $bookingDate;
        private $bookingReturn;

        function __get($name) {
            return $this->$name;
        }
        function __set($name, $value) {
            $this->$name = $value;
        }
        
    }
?>