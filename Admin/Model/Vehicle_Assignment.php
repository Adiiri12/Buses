<?php
    class Vehicle_Assignment {
        private $booking_id;
        private $vehicle_id;

        function __get($name) {
            return $this->$name;
        }
        function __set($name, $value) {
            $this->$name = $value;
        }
        
    }
?>