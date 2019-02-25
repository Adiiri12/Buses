<?php
require_once "../Model/dataAccess.php";
require_once "../Model/Admin.php";
if(!isset($_SESSION)){
  session_start(); 
}
if (!isset($_POST["LogIn"]))
   {
    $User = $_POST["UserName"];
    $Pass = $_POST["Password"];
    $results = getAdminByLoggin($User,$Pass);
 

    if($results)
    {
        $_SESSION["LoggedIn"] = $results;
        header('Location:   ..View/Index.php');
    }
    else
    {
        $message = "UserName/Password Incorrect";
        header('Location:   ..View/Login.php');
    }
   }