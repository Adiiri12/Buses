<?php
    class Vehicles implements JsonSerializable {

        private $vehicle_id;
        private $vehicleMake;
        private $numberOfSeats;
        private $vehicleType;
        private $licenceRequried;
        private $hourlyPrice;
        private $links;
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
        
        public function jsonSerialize()
        {
            return get_object_vars($this);
        }
    }
?>