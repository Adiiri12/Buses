<?php
require_once "../Model/dataAccess.php";
require_once "../Model/Admin.php";
<<<<<<< HEAD

  session_start(); 


if (isset($_POST["LogIn"]))
{
    $User = $_POST["User"];
    $Pass = $_POST["Pass"];
    $results = checkUserExists($User);
    $message=" ";
    

    if($results == false)
    {
        $message ="UserName/Password Incorrect";
        header('Location:   ../View/Login.php?errorNoUserFound');
        exit();
    }
    else 
    { 
        $HashedPass = $results->user_password;
        
        
        if($ValidPassword == password_verify($Pass, $HashedPass))
        {
            $_SESSION['Admin_id'] = $results;
            $_SESSION['Admin_name'] = $results->admin_name;
            header('Location:   ../View/Index.php?loginSuccess');
            exit();
        }
        else
        {
            header('Location:   ../View/Login.php?NoMatch');
            exit();
        }
    }

        header('Location:   ../View/Login.php?NoHelp');
        exit(); 
}
   require_once "../View/Login.php";
=======
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
>>>>>>> 568ba6872863a56fbc980df47582b63fe699af80
