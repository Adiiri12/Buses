<?php

require_once "../Model/dataAccess.php";
require_once "../Model/Vehicle.php";


if( isset($_POST["Make"]) && isset($_POST["Type"]) && isset($_POST["Seats"]) && isset($_POST["Requried"])
   && isset($_POST["Price"]) && isset($_POST["Link"]))
   {
   
    $id = $_REQUEST["id"];  
    $vehicleMake = $_POST["Make"];
    $vehicleType = $_POST["Type"];    
    $numberOfSeats = $_POST["Seats"];
    $licenceRequried = $_POST["Requried"];
    $hourlyPrice = $_POST["Price"];
    $links = $_POST["Link"];

    updateVehicleById($vehicleMake,$vehicleType,$numberOfSeats,$licenceRequried
    ,$hourlyPrice,$links,$id);

    echo("true");

}


?>