<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require_once "../Model/Vehicle.php";
require_once "../Model/dataAccess.php";

if (!isset($_REQUEST["search"]))
      {  
      $results = getAllVehicles();
//      echo "<br> IF statwement </br>";
      }
 else
   {
      $price = $_REQUEST["price"];
      $numberOfPassengers = $_REQUEST["Passengers"];
      $vehicleName = $_REQUEST["Vehicle"];
      $results = getVehicleByAllInputs($price,$vehicleName,$numberOfPassengers);

//        echo "<br> else statement </br>";
   }

  require_once "../View/Vehicle.php";
?>