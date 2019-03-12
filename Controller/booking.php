<?php
require_once "../Model/dataAccess.php";
require_once "../Model/Account.php";
require_once "../Model/Booking.php";

if(isset($_POST["placeOrder"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $user = getUserByLogin($email);
    $_SESSION["book"]= [];

    if($user[0]->username == false)
    {
        $message ="UserName/Password Incorrect";
         header('Location:   ../View/checkoutAfterSignup.php?IncorrectUser/Password');
         exit();
    }      
    else
    {
        $HashedPass = $user[0]->user_password;
        $validpassword = password_verify($password, $HashedPass);

        if($validpassword)
      {
          $_SESSION['username'] = $user[0]->username;
           header('Location:   ../View/checkoutAfterSignup.php?loginSuccess');

       //    $vehicles = $_SESSION["vehicle"];

       //    foreach ($vehicles as $vehicle) {
           $booking = new Booking();
           $booking->$booking_id = 0;
           $booking->$customer_name = "test";//$user->accountId;
           $booking->$driver_id = 0;
           $booking->$vehicle_id = 0;//$vehicle->vehicle_id;
           addBooking($booking);
           $_SESSION["book"][] = $booking; 
     //      }
          exit();
      }
}

$name = $user[0]->username;

var_dump($_SESSION["book"][0]);
require_once "../View/process.php";


}


?>
