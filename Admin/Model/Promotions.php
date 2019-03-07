<?php
    class Promotions {
        private $promotion_id;
        private $vehicle_id;
        private $promotionDate;
        private $promotionExpiryDate;

        function __get($name) {
            return $this->$name;
        }
        function __set($name, $value) {
            $this->$name = $value;
        }
        
    }
?>