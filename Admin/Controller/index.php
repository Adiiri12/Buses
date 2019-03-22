<?php
require_once "../Model/dataAccess.php";
require_once "../Model/Admin.php";

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$message = " ";
if (!isset( $_SESSION['Admin_id']) && !isset($_SESSION['Admin_name'])) {
    // Redirect them to the login page
   // echo "Not set";
    require_once "../View/Login.php";
    exit();

}  

else
{
    $message = "Welcome Admin ".$_SESSION['Admin_name'];
}
require_once "../View/index.php";
?>