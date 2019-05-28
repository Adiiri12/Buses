<?php
require_once "../Model/dataAccess.php";
require_once "../Model/Admin.php";


  session_start(); 


if (isset($_POST["LogIn"]))
{
    $User = $_POST["User"];
    $Pass = $_POST["Pass"];
    $results = getAdminByLoggin($User);
    $message=" ";
 /*
    if($results == false)
    {
        $message ="UserName/Password Incorrect";
        header('Location:   ../View/Login.php?errorNoUserFound');
        exit();
    }
        else{
            $validpassword = password_verify($Pass, $results['user_password']);

        if($validpassword)
        {
            $_SESSION['Admin_id'] = $results;
            $_SESSION['Admin_name'] = $results->['admin_name'];
            header('Location:   ../View/Index.php?loginSuccess');
            exit();
        }
        else
        {
            header('Location:   ../View/Login.php?IncorrectPassword');
            exit();
        }
      }
      */
    if($results[0]->username == false)
    {
        $message ="UserName/Password Incorrect";
         header('Location:   ../View/Login.php?IncorrectPassword');
         exit();
    }
      else
      {
          $HashedPass = $results[0]->user_password;
          $validpassword = password_verify($Pass, $HashedPass);

          if($validpassword)
        {
            $_SESSION["Admin_user"] = $results[0]->admin_id;
            $_SESSION['Admin_id'] = $results[0]->username;
            $_SESSION['Admin_name'] = $results[0]->admin_name;
             header('Location:   ../View/index.php?loginSuccess');
            exit();
        }
        else
        {
          header('Location:   ../View/Login.php?IncorrectPassword');
           exit();
        }
    }
        

         header('Location:   ../View/Login.php?NoHelp');
        

    }
    

   require_once "../View/Login.php";

