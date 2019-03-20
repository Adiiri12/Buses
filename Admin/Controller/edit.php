<?php

require_once "../Model/dataAccess.php";
require_once "../Model/Vehicle.php";

if(session_id() == ''){
  //session has not started
  session_start();
}



$id = $_REQUEST["id"];

//var_dump(session_id());

if (isset($_POST["submit"]))
{
    //echo "submit";
   
    
    $vehicleMake = $_POST["Make"];
    $vehicleType = $_POST["Type"];    
    $numberOfSeats = $_POST["Seats"];
    $licenceRequried = $_POST["Requried"];
    $hourlyPrice = $_POST["Price"];
    $links = $_POST["Link"];


    //var_dump($results);
    /*
      //$admin = new Vehicle();
      $admin->vehicle_id = htmlentities($id);
      $admin->vehicleMake = htmlentities($vehicleMake);
      $admin->vehicleType = htmlentities($vehicleType);
      $admin->numberOfSeats = htmlentities($numberOfSeats);
      $admin->hourlyPrice = htmlentities($hourlyPrice);
      $admin->licenceRequried = htmlentities($licenceRequried);
      $admin->links = htmlentities($links);
     */

      updateVehicleById($vehicleMake,$vehicleType,$numberOfSeats,$licenceRequried
                        ,$hourlyPrice,$links,$id);

}
$results = getVehiclesByID($id);



require_once "../View/edit.php";