<?php
    class Driver {
        private $driver_id;
        private $driver_name;
        private $driver_surname;
        private $phone_number;

        function __get($name) {
            return $this->$name;
        }
        function __set($name, $value) {
            $this->$name = $value;
        }
        
    }
?>