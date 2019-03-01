<?php
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0ff2d9c87eed25234aff6372e5990e9a1535d486
require_once "../Model/Vehicle.php";
require_once "../Model/dataAccess.php";

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 



$message = " ";
$Vehicle =" ";
if ( isset( $_SESSION['Admin_id'] ) ) {
    // $message = "Welcome" + $_SESSION['Admin_id'];
} 

else {
    // Redirect them to the login page
    header('Location:   ../View/Login.php?NotLoggedIn');
    exit();
  }
 
  if (isset($_REQUEST["Submit"]))
  {
    $vehicleMake = $_REQUEST["vehicleMake"];
    $vehicleType = $_REQUEST["vehicleType"];    
    $numberOfSeats = $_REQUEST["numberOfSeats"];
    $licenceRequried = $_REQUEST["licenceRequried"];
    $hourlyPrice = $_REQUEST["hourlyPrice"];
    $links = $_REQUEST["links"];
 
    $admin = new Vehicle();
      $admin->vehicleMake = htmlentities($vehicleMake);
      $admin->vehicleType = htmlentities($vehicleType);
      $admin->numberOfSeats = htmlentities($numberOfSeats);
      $admin->hourlyPrice = htmlentities($hourlyPrice);
      $admin->links = htmlentities($links);


     $Vehicle = "$vehicleMake has been added";

  }

  
      
  
     
  $results = getAllVehicles();
          
      //echo "<br> IF statwement </br>";
     
       
<<<<<<< HEAD
=======
=======

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
          $numberOfPassengers = $_REQUEST["Passengers"];
          $vehicleName = $_REQUEST["Vehicle"];
          $licenceRequried = $_REQUEST["licenceRequried"];
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

    }
         

>>>>>>> 568ba6872863a56fbc980df47582b63fe699af80
>>>>>>> 0ff2d9c87eed25234aff6372e5990e9a1535d486
  require_once "../View/Vehicle.php";
?>