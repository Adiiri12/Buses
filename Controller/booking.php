<?php
require_once "../Model/dataAccess.php";
require_once "../Model/Account.php";
require_once "../Model/Booking.php";
require_once "../Controller/basket.php";


if(isset($_REQUEST["placeOrder"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $user = getUserByLogin($email);
    $_SESSION["book"]= [];
    if(!isset($_SESSION["vehicles"])) {
    }
    else {
        $vehicles = $_SESSION["vehicles"];
    }
  

    if($user[0]->username == false)
    {
        $message ="UserName/Password Incorrect";
         header('Location:   ../View/checkoutAfterSignup.php?IncorrectUser/Password');
         exit();
    }      
    else
    {
      
        $dbPassword = $user[0]->user_password;

        if($password == $dbPassword) {
          $validpassword = true;
        }
        else {
          $validpassword = false;
          require_once "../View/checkout.php";
          exit();
        }
       // $validpassword = password_verify($password, $HashedPass);
        if($validpassword == true)
      {
       foreach($vehicles as $vehicle) {
        $toDb = new Booking();
        $toDb->customer_id = $user[0]->accountId;
        $toDb->driver_id = 0;
        $toDb->vehicle_id = $vehicle->vehicle_id;
        addBooking($toDb);
       }
       $_SESSION["vehicles"] = [];
       $_SESSION["totalAmount"] = [];
     }
}

$name = $user[0]->username;
require_once "../View/process.php";


}


?>
