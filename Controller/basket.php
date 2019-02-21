
<?php
if(!isset($_SESSION)){
  session_start(); 
}
if(!isset($_SESSION["make"])) 
{ 
   $_SESSION["make"] = [];   
   $_SESSION["price"] = [];   
   $_SESSION["links"] = [];   
   $make = [];
   $price = [];
   $links = [];
} 


if(isset($_POST['submit']))
{
  $makeVar =$_REQUEST["make"];
  $_SESSION["make"][] = $makeVar;
  $make = $_SESSION["make"];

  $priceVar =$_REQUEST["price"];
  $_SESSION["price"][] = $priceVar;
  $price = $_SESSION["price"];

  $linksVar =$_REQUEST["links"];
  $_SESSION["links"][] = $linksVar;
  $links = $_SESSION["links"];
  require_once "../View/Vehicle.php";
  
} 

if(isset($_POST['clear']))
{
  $_SESSION["make"] = [];   
  $_SESSION["price"] = [];   
  $_SESSION["links"] = [];   
  $make = [];
  $price = [];
  $links = [];
  require_once "../View/basket.php";
} 
if(isset($_POST['remove']))
{
  unset($_SESSION["make"][$_REQUEST["indexVar"]] );   
  unset($_SESSION["price"][$_REQUEST["indexVar"]] );    
  unset($_SESSION["links"][$_REQUEST["indexVar"]] );   
  unset($_SESSION["make"][$_REQUEST["indexVar"] +1] );   
  unset($_SESSION["price"][$_REQUEST["indexVar"]+1] );    
  unset($_SESSION["links"][$_REQUEST["indexVar"]+1] );   
  require_once "../View/basket.php";
} 


$make = $_SESSION["make"];
$links = $_SESSION["links"];
$price = $_SESSION["price"];


?>