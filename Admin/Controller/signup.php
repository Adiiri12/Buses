<?php
require_once "../Model/dataAccess.php";
require_once "../Model/Admin.php";
if(!isset($_SESSION)){
  session_start(); 
}
if ( isset( $_SESSION['Admin_id'] ) ) {
  // $message = "Welcome" + $_SESSION['Admin_id'];
} 

else {
  // Redirect them to the login page
  header('Location:   ../View/Login.php?NOTADMIN');
  exit();
}
if (isset($_POST["LogIn"]))
{
    $email = $_POST["email"];
    $user = $_POST["User"];
    $pass = $_POST["Pass"];
    $name = $_POST["Name"];
    $rPass = $_POST["RPass"];
    $message = " ";


    $results = getAdminByLoggin($user);
    $Check = $results;

      if($Check > 0)
      {
        header('Location:   ../View/signup.php?error=userTaken');
        exit();
      }

      elseif ($pass != $rPass){
          
        header('Location:   ../View/signup.php?errorpassword='.$email."&user=".$user);
        exit();
        
        }
    else
    {
      $passwordHash = password_hash($pass, PASSWORD_DEFAULT);

      $admin = new Admin();
      $admin->email_address = htmlentities($email);
      $admin->username = htmlentities($user);
      $admin->user_password = htmlentities($passwordHash);
      $admin->admin_name = htmlentities($name);

      createAdminAccount($admin);
      header('Location:   ../View/Login.php?successAccounthasbeen'.$user.'Created');
    }
}

require_once "../View/signup.php";
?>