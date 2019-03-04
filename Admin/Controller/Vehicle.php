<?php
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
      $admin->licenceRequried = htmlentities($licenceRequried);
      $admin->links = htmlentities($links);


      $results = CheckVehicleExists($vehicleName,$vehicleType);
      $CHECK = $results;

     if($CHECK)
     {
      header('Location:   ../Controller/Vehicle.php?VehicleAlreadyExists');
      exit();
     }

     else
     {
      AddNewVehicle($admin);
      $Vehicle = "$vehicleMake has been added";
      header('Location:   ../Controller/Vehicle.php?Vehicle'.$vehicleMake.'hasbeenadded');
      exit();
     }
    
     

  }

  
      
  
     
  $results = getAllVehicles();
          
      //echo "<br> IF statwement </br>";
     
  require_once "../View/Vehicle.php";
?>