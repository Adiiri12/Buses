<?php
require_once "../Model/dataAccess.php";
require_once "../Model/Vehicle.php";

session_start(); 



if (isset($_POST["edit"]))
{
    //echo "submit";
    $id = $_REQUEST["id"];
    $vehicleMake = $_POST["Make"];
    $vehicleType = $_POST["Type"];    
    $numberOfSeats = $_POST["Seats"];
    $licenceRequried = $_POST["Requried"];
    $hourlyPrice = $_POST["Price"];
    $links = $_POST["Link"];

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



require_once "../View/Vehicle.php";