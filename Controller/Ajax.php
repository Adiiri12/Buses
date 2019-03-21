<?php
header('Content-Type: application/json');
require_once "../Model/Vehicle.php";
require_once "../Model/dataAccess.php";


if(!isset($_REQUEST["Make"]) && !isset($_REQUEST["Cost"]) && !isset($_REQUEST["Pass"]) && !isset($_REQUEST["Licence"]) && !isset($_REQUEST["Date"]) && !isset($_REQUEST["EDate"]) )
{
    //$results = getAllVehicles();
    echo json_encode([]);
}
else{
    $date = $_REQUEST["Date"];
    $edate = $_REQUEST["EDate"];
    $make = $_REQUEST["Make"];
    $price = $_REQUEST["Cost"];
    $seats = $_REQUEST["Pass"];
    $licenceRequried = $_REQUEST["Licence"];

    $results = showAvaliabiltyByAllInputs($date,$edate,$make,$seats,$licenceRequried,$price);
    echo json_encode($results);



  
}
?>