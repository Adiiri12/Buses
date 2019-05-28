<?php
require_once "../Model/Vehicle.php";
require_once "../Model/Promotion.php";
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
if(isset($_REQUEST["Edate"]) && isset($_REQUEST["date"]) && isset($_REQUEST["id"]))
    {
        $promotion = new Promotion();
        $promotion->vehicle_id = htmlentities($_REQUEST["id"]);
        $promotion->promotionDate = htmlentities($_REQUEST["date"]);
        $promotion->promotionExpiryDate = htmlentities($_REQUEST["Edate"]);
        $promotion->admin_id = $_SESSION["Admin_id"];
        addPromotion($promotion);

        echo("true");



    }

    $results = showPromotion();
    $VehicleList = getAllVehicles();

?>