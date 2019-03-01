<?php
    class Vehicle {
<<<<<<< HEAD
        private $vehicle_id;
=======
<<<<<<< HEAD
        private $vehicle_id;
=======
        private $id;
>>>>>>> 568ba6872863a56fbc980df47582b63fe699af80
>>>>>>> 0ff2d9c87eed25234aff6372e5990e9a1535d486
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
        
    }
?>