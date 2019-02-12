<?php
    class Vehicle {
        private $id;
        private $vehicleName;
        private $numberOfPassengers;
        private $CPCRequired;
        private $PCVRequired;
        private $price;
        private $links;

        function __get($name) {
            return $this->$name;
        }
        function __set($name, $value) {
            $this->$name = $value;
        }
        
    }
?>