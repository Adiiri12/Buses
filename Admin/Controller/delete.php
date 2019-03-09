<?php
require_once "../Model/dataAccess.php";
require_once "../Model/Vehicle.php";

session_start(); 



if (isset($_GET["delete"]))
{
 $id = $_GET["delete"];
 $results = deleteVehicleById($id);

}



require_once "../View/Vehicle.php";