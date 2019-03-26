<?php
require_once "../Model/dataAccess.php";
require_once "../Model/Account.php";
require_once "../Model/Booking.php";
require_once "../Controller/basket.php";


if(isset($_REQUEST["placeOrder"])) {
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $user = getUserByLogin($email);
    $_SESSION["book"]= [];
    if(!isset($_SESSION["vehicles"])) {
    }
    else {
        $vehicles = $_SESSION["vehicles"];
        $drivers = $_SESSION["drivers"];
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
        if(count($drivers)== 0){
          $toDb->driver_id = null;
        }
        else {
          $listOfDrivers = getAllDrivers();
          $randomNom = rand(0, sizeof($listOfDrivers));
          $toDb->driver_id = $listOfDrivers[$randomNom]->driver_id;
        }
       
        $toDb->vehicle_id = $vehicle->vehicle_id;
        $toDb->dateFrom = $_SESSION["dateFrom"][0];
        $toDb->dateTo = $_SESSION["dateTo"][0];
        
        addBooking($toDb);
       }
       $_SESSION["vehicles"] = [];
       $_SESSION["totalAmount"] = [];
       $_SESSION["dateFrom"] = [];
       $_SESSION["dateTo"] = [];
       $_SESSION["drivers"] = [];
     }
}

$name = $user[0]->username;
require_once "../View/process.php";


}


?>
