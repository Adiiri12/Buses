<?php
header('Content-Type: application/json');
require_once "../Model/Vehicle.php";
require_once "../Model/dataAccess.php";


if(isset($_REQUEST["Make"]))
{
    $make = $_REQUEST["Make"];
    $results = getAllVehicles();
    echo json_encode($results);
}

else
{
    
    $results = getAllVehicles();
    echo json_encode($results);
}