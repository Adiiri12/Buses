<?php
require_once "../Model/Vehicle.php";
require_once "../Model/dataAccess.php";

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 


if (!isset( $_SESSION['Admin_id']) || !isset($_SESSION['Admin_name'])) {
  // Redirect them to the login page
  header('Location:   ../View/Login.php?NotLoggedIn');
  exit();

}  


if(isset($_REQUEST["makes"]) && isset($_REQUEST["types"]) && isset($_REQUEST["seats"]) && isset($_REQUEST["cost"])
   && isset($_REQUEST["licence"]) && isset($_REQUEST["link"]) )

   {
    $id = $_SESSION["Admin_id"];
    $admin = new Vehicle();
    $admin->vehicleMake = htmlentities($_REQUEST["makes"]);
    $admin->vehicleType = htmlentities($_REQUEST["types"]);
    $admin->numberOfSeats = htmlentities($_REQUEST["seats"]);
    $admin->hourlyPrice = htmlentities($_REQUEST["cost"]);
    $admin->licenceRequried = htmlentities($_REQUEST["licence"]);
    $admin->links = htmlentities($_REQUEST["link"]);
    $admin->admin_id = $id;
    //echo "$id";
    //echo "what0";
    //echo '<pre>'; print_r($_SESSION); echo '</pre>';
    AddNewVehicle($admin);

    //$result = getVehicleByModel($_REQUEST["makes"]);
    echo("true");
   }
