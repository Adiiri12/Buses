<?php
    session_start();
    require_once ("../Model/Account.php");
    require_once ("../Model/dataAccess.php");

    $status = false;

    if(isset($_POST["submit"])) //form is submitted
    {
        $email = $_POST["email"];
        $username = $_POST["username"];
        $user_password = $_POST["psw"];
        $repeat_password = $_POST["rpsw"];

        if ($user_password != $repeat_password) //check to see if the both entries of the password are the same
        {
            
            header('Location:   ../View/checkout.php?errorpassword='.$email."&user=".$username); //if incorrect, the url changes to indicate the passwords are not the same
            exit();
            
        }
        else //if the passwords are the same
        {
       
        $account = new Account(); //create new instance of Account
        $account->email = htmlentities($email);
        $account->username = htmlentities($username);
        $account->user_password = htmlentities($user_password); 

        addAccount($account); //call function in dataAccess.php to add an account to the database
        $status = true;
        header('Location:   ../View/checkoutAfterSignup.php?successAccount'.$user.'HasBeenCreated'); //the url changes to indicate that account creation was successful
        }
    }   

    require_once ("../View/checkout.php");
?>