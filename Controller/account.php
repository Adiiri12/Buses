<?php
    session_start();
    require_once ("../Model/Account.php");
    require_once ("../Model/dataAccess.php");

    $status = false;

    if(isset($_POST["submit"]))
    {
        $email = $_POST["email"];
        $username = $_POST["username"];
        $user_password = $_POST["psw"];
        $repeat_password = $_POST["rpsw"];

        if ($user_password != $repeat_password){
            
            header('Location:   ../View/checkout.php?errorpassword='.$email."&user=".$username);
            exit();
            
        }
        else
        {
        $passwordHash = password_hash($user_password, PASSWORD_DEFAULT);

        $account = new Account();
        $account->email = htmlentities($email);
        $account->username = htmlentities($username);
        $account->user_password = htmlentities($passwordHash); 

        addAccount($account);
        $status = true;
        header('Location:   ../View/checkoutAfterSignup.php?successAccount'.$user.'HasBeenCreated');
        }
    }   

    require_once ("../View/checkout.php");
?>