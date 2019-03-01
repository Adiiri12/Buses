<?php
require_once "../Model/dataAccess.php";
require_once "../Model/Admin.php";

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$message = " ";
if ( isset( $_SESSION['Admin_id'] ) ) {
     //$message = "Welcome".implode(" ", $_SESSION['Admin_id']);
}  

else {
    // Redirect them to the login page
    header('Location:   ../View/Login.php?NotLoggedIn');
    exit();
}
require_once "../View/index.php";
?>