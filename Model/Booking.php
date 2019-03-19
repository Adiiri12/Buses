<?php
    class Booking {
        private $booking_id;
        private $customer_name;
        private $driver_id;
        private $vehicle_id;

     //   private $bookingDate;
     //   private $bookingReturn;

        function __get($name) {
            return $this->$name;
        }
        function __set($name, $value) {
            $this->$name = $value;
        }
        
    }
?>