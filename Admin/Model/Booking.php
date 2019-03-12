<?php
    class Booking {
        private $booking_id;
        private $customer_id;
        private $driver_id;
        private $vehicle_id;

        function __get($name) {
            return $this->$name;
        }
        function __set($name, $value) {
            $this->$name = $value;
        }
        
    }
?>