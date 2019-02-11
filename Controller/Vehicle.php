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
      echo "<br> IF statwement </br>";
      }

else
      {
         $search = $_REQUEST["price"];
         $results = getVehicleByPrice($search);
         echo "<br> else statement </br>";
    }

  require_once "../View/Vehicle.php";
?>