<?php
require_once "../Model/Vehicle.php";
require_once "../Model/dataAccess.php";

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 


$Vehicle =" ";

if (!isset( $_SESSION['Admin_id']) && !isset($_SESSION['Admin_name'])) {
  // Redirect them to the login page
  require_once "../View/Login.php";
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
 
    


      $results = CheckVehicleExists($vehicleMake,$vehicleType);

     if($results == true)
     {
      header('Location:   ../Controller/Vehicle.php?VehicleAlreadyExists');
      exit();
     }

     else
     {
      $admin = new Vehicle();
      $admin->vehicleMake = htmlentities($vehicleMake);
      $admin->vehicleType = htmlentities($vehicleType);
      $admin->numberOfSeats = htmlentities($numberOfSeats);
      $admin->hourlyPrice = htmlentities($hourlyPrice);
      $admin->licenceRequried = htmlentities($licenceRequried);
      $admin->links = htmlentities($links);

      AddNewVehicle($admin);
     // $Vehicle = "$vehicleMake has been added";
      header('Location:   ../Controller/Vehicle.php?Vehicle'.$vehicleMake.'hasbeenadded');
      exit();
     }
    
     

  }

  
      
  
     
  $results = getAllVehicles();
          
      //echo "<br> IF statwement </br>";
     
  require_once "../View/Vehicle.php";
?>