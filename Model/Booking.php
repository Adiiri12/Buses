<?php
    class Booking {
        private $booking_id;
        private $customer_name;
        private $driver_id;
        private $vehicle_id;
        private $dateFrom;
        private $dateTo;

        function __get($name) {
            return $this->$name;
        }
        function __set($name, $value) {
            $this->$name = $value;
        }
        
    }
?>