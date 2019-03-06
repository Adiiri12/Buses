<?php
require_once "../Model/dataAccess.php";
require_once "../Model/Admin.php";

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$message = " ";
if (!isset( $_SESSION['Admin_id']) || !isset($_SESSION['Admin_name'])) {
    // Redirect them to the login page
    header('Location:   ../View/Login.php?NotLoggedIn');
    exit();

}  

else
{
    $message = "Welcome ".$_SESSION['Admin_name'];
}
require_once "../View/index.php";
?>