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
          //echo "<br> IF statwement </br>";
      }

        $price = $_REQUEST["price"];
        $numberOfPassengers = $_REQUEST["Passengers"];
        $vehicleName = $_REQUEST["Vehicle"];
        $licenceRequried = $_REQUEST["licenceRequried"];
      
       if($vehicleName == "" && $price == "" && $numberOfPassengers == "" && $licenceRequried == "")
       {
            $results = getAllVehicles();           // The user has everything to null
       }
       elseif($vehicleName != "" && $price == "" && $numberOfPassengers =="" && $licenceRequried == "" ) 
       {
           $results = getVehicleByModel($vehicleName);
       }
       elseif($price !== "" && $vehicleName == "" && $numberOfPassengers == "" && $licenceRequried == "")
       {
           $results = getVehicleByPrice($price);
       }
        elseif($numberOfPassengers != "" && $vehicleName == "" && $price == "" && $licenceRequried == "")
       {
           $results = getVehiclebySeats($numberOfPassengers);
       }
       elseif($licenceRequried != "" && $vehicleName == "" && $price == "" && $numberOfPassengers == "")
       {
           $results = getVehicleByLicence($licenceRequried);
       }
       elseif($numberOfPassengers != "" && $price != "" && $vehicleName == "" && $licenceRequried == "" )
       {
           $results =  getVehicleByPriceAndSeats($price,$numberOfPassengers);
       }

        elseif($numberOfPassengers != "" && $vehicleName != "" && $price == "" && $licenceRequried == "" )
       {
            $results = getVehicleByModelAndSeats($vehicleName,$numberOfPassengers);
       }
        elseif($licenceRequried != "" && $price != "" && $vehicleName == "" && $numberOfPassengers == "")
        {
           $results = getVehicleByPriceAndLicence($price,$licenceRequried);
        }
        elseif($licenceRequried != "" && $price != "" && $vehicleName != "" && $numberOfPassengers != "")
        {
           $results = getVehicleByAllInputs($price,$vehicleName,$numberOfPassengers,$licenceRequried);
        }
         

  require_once "../View/Vehicle.php";
?>