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
       
        $account = new Account();
        $account->email = htmlentities($email);
        $account->username = htmlentities($username);
        $account->user_password = htmlentities($user_password); 

        addAccount($account);
        $status = true;
        header('Location:   ../View/checkoutAfterSignup.php?successAccount'.$user.'HasBeenCreated');
        }
    }   

    require_once ("../View/checkout.php");
 
    if(!empty($_POST["remember"])) {
        setcookie ("username",$_POST["username"],time()+ 3600);
        setcookie ("psw",$_POST["psw"],time()+ 3600);
        echo "Cookies Set Successfuly";
    } else {
        setcookie("username","");
        setcookie("psw","");
        echo "Cookies Not Set";
    }
?>