<?php
    class Vehicle implements JsonSerializable {

        private $vehicle_id;
        private $vehicleMake;
        private $numberOfSeats;
        private $vehicleType;
        private $licenceRequried;
        private $hourlyPrice;
        private $links;

        function __get($name) {
            return $this->$name;
        }
        function __set($name, $value) {
            $this->$name = $value;
        }
        
        public function jsonSerialize()
        {
            return get_object_vars($this);
        }
    }
?>