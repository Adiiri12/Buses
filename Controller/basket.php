<?php

require_once "../Model/Vehicle.php";
require_once "../Model/dataAccess.php";
require_once "../Model/Driver.php";

if(!isset($_SESSION)){
  session_start(); 
}
if(!isset($_SESSION["vehicles"])&& !isset($_SESSION["totalAmount"])) 
{ 
   $_SESSION["totalAmount"] =[];
   $_SESSION["dateFrom"] =[];
   $_SESSION["dateTo"] = [];   
   $_SESSION["vehicles"] = []; 
   $_SESSION["drivers"] = [];   
   $id;
   $vehicles = [];
   $total = [];
   $dateFrom = [];
   $dateTo = [];
   $drivers = [];

}
if(isset($_POST['addVehicleToBasket'])) {
  $id = $_REQUEST["transferedId"];
  $currentResult =  getVehiclesByIdBasket($id);
  $_SESSION["vehicles"][] = $currentResult[0];
  $_SESSION["totalAmount"][] = $currentResult[0]->hourlyPrice;
  require_once "../View/Vehicle.php";
}

if(isset($_POST['clear'])) {
  $_SESSION["vehicles"] = [];
  $_SESSION["totalAmount"] = [];
  $vehicles = $_SESSION["vehicles"];
  $total = $_SESSION["totalAmount"];
  require_once "../View/basket.php";
}
if(isset($_POST['remove'])) {
  array_splice($_SESSION["vehicles"], $_REQUEST["indexVar"],1);
  array_splice($_SESSION["totalAmount"], $_REQUEST["indexVar"],1);
  $vehicles = $_SESSION["vehicles"];
  $total = $_SESSION["totalAmount"];
  require_once "../View/basket.php";
}
if(isset($_POST['checkout'])) {
  $_SESSION["dateFrom"][] = $_REQUEST["dateFrom"];
  $_SESSION["dateTo"][] = $_REQUEST["dateTo"];
  if(isset($_POST["driver"])) {
    $_SESSION["drivers"][] = $_REQUEST["driver"];
  }
  $dateFrom = $_SESSION["dateFrom"];
  $dateTo = $_SESSION["dateTo"];
  $vehicles = $_SESSION["vehicles"];
  $total = $_SESSION["totalAmount"];
  require_once "../View/checkout.php";
}

$vehicles = $_SESSION["vehicles"];
$total = $_SESSION["totalAmount"];

?>