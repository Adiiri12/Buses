<?php

if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
require_once "../Model/Basket.php";
require_once "../Model/dataAccess.php";

if (!isset($_REQUEST["Checkout"]))
      {  
        //$results = getAllVehicles();
      }
 

  require_once "../View/basket.php";
?>