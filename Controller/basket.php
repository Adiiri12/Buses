
<?php
if(!isset($_SESSION)){
  session_start(); 
}
if(!isset($_SESSION["basket"])) 
{ 
   $_SESSION["basket"] = [];   
   $basket = [];
} 


if(isset($_POST['submit']))
{
  $myVar =$_REQUEST["id"];
  $_SESSION["basket"][] = $myVar;
  $basket = $_SESSION["basket"];
  require_once "../View/Vehicle.php";
  
} 




$basket = $_SESSION["basket"];


?>