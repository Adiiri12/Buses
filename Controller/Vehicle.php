<?php

require_once "../Model/Vehicle.php";
require_once "../Model/dataAccess.php";




if (!isset($_REQUEST["search"]))
      {  
      $results = getAllVehicles();
          //echo "<br> IF statwement </br>";
      }
       else
       {
          $price = $_REQUEST["price"];
          $seats = $_REQUEST["Passengers"];
          $make = $_REQUEST["Vehicle"];
          $licenceRequried = $_REQUEST["licenceRequried"];
          $date =  $_REQUEST["ReleaseDate"];
          $edate =  $_REQUEST["ExpiryDate"];

          $results = showAvaliabilty($date,$edate,$make,$seats,$licenceRequried,$price);



          /*
          $results = getVehicleByAllInputs($price,$vehicleName,$numberOfPassengers,$licenceRequried);
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
        elseif($vehicleName != "" && $price != "" && $licenceRequried == "" && $numberOfPassengers == "")
        {
           $results = getVehicleByModelAndPrice($vehicleName,$price);
        }
        elseif($vehicleName != "" && $price != "" && $licenceRequried != "" && $numberOfPassengers == "")
        {
           $results = getVehicleByModelAndPriceAndLicenceRequried($vehicleName,$price,$licenceRequried);
        }
        elseif($vehicleName != "" && $price != "" && $numberOfPassengers != "" && $licenceRequried == "")
        {
           $results = getVehicleByModelAndPriceAndNumberOfPassengers($vehicleName,$price,$numberOfPassengers);
        }
        elseif($licenceRequried != "" && $price != "" && $numberOfPassengers != "" && $vehicleName == "")
        {
           $results = getVehicleByPriceAndNumberOfPassengersAndLicenceRequried($licenceRequried,$price,$numberOfPassengers);
        }
        */

    }
         

  require_once "../View/Vehicle.php";
?>