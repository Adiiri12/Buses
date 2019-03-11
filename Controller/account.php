<?php
    session_start();
    require_once ("Account.php");
    require_once ("dataAccess.php");

   /* if (!isset($_SESSION[""])


    
    $email = $_REQUEST["email"];*/

    $status = false;
    if(isset($_REQUEST[""]))
    {
        $email = $_REQUEST["email"];
        $username = $_REQUEST["username"];
        $user_password = $_REQUEST["user_password"];

        $account = new Account();
        $account->email = htmlentities($email);
        $account->username = htmlentities($username);
        $account->user_password = htmlentities($user_password); 

        addAccount($account);
        $status = true;
    }
?>
