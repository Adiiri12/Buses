<?php
    class Promotion implements JsonSerializable {
        private $promotion_id;
        private $vehicle_id;
        private $price;
        private $promotionDate;
        private $promotionExpiryDate;
        private $Make;
        private $Vehicle_type;
        private $Vehicle_link;

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