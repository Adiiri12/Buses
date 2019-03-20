<?php
header('Content-Type: application/json');
require_once "../Model/dataAccess.php";
require_once "../Model/Vehicle.php";


session_start(); 



if (isset($_GET["id"]))
{
 $id = $_GET["id"];
 $results = deleteVehicleById($id);
 echo json_encode($results);

}

if(isset($_GET["Promotionid"]))
{
    $id = $_GET["Promotionid"];
  
    $results = promotionDeleteVehicleById($id);
    
    echo json_encode($results);

}


