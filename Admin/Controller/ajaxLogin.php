<?php
require_once "../Model/dataAccess.php";
require_once "../Model/Admin.php";

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

header("Content-Type: text/plain");

if(isset($_REQUEST["user"]) && isset($_REQUEST["password"]))
{

   $User = $_REQUEST["user"];
   $Pass = $_REQUEST["password"];

   $results = getAdminByLoggin($User);


   if(count($results) == 0)
    {
        echo("false");
    }
    else
      {
          $HashedPass = $results[0]->user_password;
          $validpassword = password_verify($Pass, $HashedPass);

          if($validpassword)
        {
            $_SESSION['Admin_id'] = $results[0]->username;
            $_SESSION['Admin_name'] = $results[0]->admin_name;
            echo("true");
        }
        else
        {
         echo("false");
        }
    }
}