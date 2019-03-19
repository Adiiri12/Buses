<?php
header('Content-Type: application/json');
require_once "../Model/Vehicle.php";
require_once "../Model/dataAccess.php";


if(!isset($_REQUEST["Make"]) && !isset($_REQUEST["Cost"]) && !isset($_REQUEST["Pass"]) && !isset($_REQUEST["Licence"]) )
{
    //$results = getAllVehicles();
    echo json_encode([]);
}
else{
    $vehicleName = $_REQUEST["Make"];
    $price = $_REQUEST["Cost"];
    $numberOfPassengers = $_REQUEST["Pass"];
    $licenceRequried = $_REQUEST["Licence"];

    $results = getVehicleByAllInputs($price,$vehicleName,$numberOfPassengers,$licenceRequried);

    if($vehicleName == "" && $price == "" && $numberOfPassengers == "" && $licenceRequried == "")
    {
       $results = getAllVehicles();           // The user has everything to null
       echo json_encode($results);
   
    }
    elseif($vehicleName != "" && $price == "" && $numberOfPassengers =="" && $licenceRequried == "" ) 
    {
      $results = getVehicleByModel($vehicleName); 
      echo json_encode($results);
      
    }
    elseif($price !== "" && $vehicleName == "" && $numberOfPassengers == "" && $licenceRequried == "")
   {
      $results = getVehicleByPrice($price);
      echo json_encode($results);
   
   }
    elseif($numberOfPassengers != "" && $vehicleName == "" && $price == "" && $licenceRequried == "")
   {
      $results = getVehiclebySeats($numberOfPassengers);
      echo json_encode($results);
   
   }
  elseif($licenceRequried != "" && $vehicleName == "" && $price == "" && $numberOfPassengers == "")
   {
      $results = getVehicleByLicence($licenceRequried);
      echo json_encode($results);
      
   }
  elseif($numberOfPassengers != "" && $price != "" && $vehicleName == "" && $licenceRequried == "" )
   {
      $results =  getVehicleByPriceAndSeats($price,$numberOfPassengers);
      echo json_encode($results);
      
   }

   elseif($numberOfPassengers != "" && $vehicleName != "" && $price == "" && $licenceRequried == "" )
   {
       $results = getVehicleByModelAndSeats($vehicleName,$numberOfPassengers);
       echo json_encode($results);
       
   }
   elseif($licenceRequried != "" && $price != "" && $vehicleName == "" && $numberOfPassengers == "")
   {
      $results = getVehicleByPriceAndLicence($price,$licenceRequried);
      echo json_encode($results);
      
   }
   elseif($vehicleName != "" && $price != "" && $licenceRequried == "" && $numberOfPassengers == "")
   {
      $results = getVehicleByModelAndPrice($vehicleName,$price);
      echo json_encode($results);
      
   }
   elseif($vehicleName != "" && $price != "" && $licenceRequried != "" && $numberOfPassengers == "")
   {
      $results = getVehicleByModelAndPriceAndLicenceRequried($vehicleName,$price,$licenceRequried);
      echo json_encode($results);
   
   }
   elseif($vehicleName != "" && $price != "" && $numberOfPassengers != "" && $licenceRequried == "")
   {
      $results = getVehicleByModelAndPriceAndNumberOfPassengers($vehicleName,$price,$numberOfPassengers);
      echo json_encode($results);
   
   }
   elseif($licenceRequried != "" && $price != "" && $numberOfPassengers != "" && $vehicleName == "")
   {
      $results = getVehicleByPriceAndNumberOfPassengersAndLicenceRequried($licenceRequried,$price,$numberOfPassengers);
      echo json_encode($results);
   
   }
    
}
?>