<?php

require_once "../Model/Vehicle.php";
require_once "../Model/dataAccess.php";


if(!isset($_SESSION)){
  session_start(); 
}
if(!isset($_SESSION["vehicles"])&& !isset($_SESSION["totalAmount"])) 
{ 
   $_SESSION["totalAmount"] =[];
   $_SESSION["vehicles"] = [];   
   $id;
   $vehicles = [];
   $total = [];

}
if(isset($_POST['submit'])) {
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

$vehicles = $_SESSION["vehicles"];
$total = $_SESSION["totalAmount"];

?>