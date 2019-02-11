<?php
    class Basket {

        private $vehicles = [];


        function __get ($name){
            return $this->name;
        }

        function __set ($name, $value){
            $this->$name = $value;
        }

        function addToBasket($vehicle) {
            $vehicles[] = $vehicle;
            echo '<script>console.log($vehicle)</script>';
        }

    }


?>