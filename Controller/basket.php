<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require_once "../Model/Basket.php";
require_once "../Model/dataAccess.php";
require_once "../Model/Vehicle.php";


        $results = getVehiclesById();
 

  require_once "../View/basket.php";
?>