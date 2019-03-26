<?php

require_once "../Model/Vehicle.php";
require_once "../Model/dataAccess.php";




if (!isset($_REQUEST["search"]))
      {  
      $results = getAllVehicles();
      }
       else
       {
          $price = $_REQUEST["price"];
          $seats = $_REQUEST["Passengers"];
          $make = $_REQUEST["Vehicle"];
          $licenceRequried = $_REQUEST["licenceRequried"];
          $date =  $_REQUEST["ReleaseDate"];
          $edate =  $_REQUEST["ExpiryDate"];
          $results = showAvaliabiltyByAllInputs($date,$edate,$make,$seats,$licenceRequried,$price);        
    }
  require_once "../View/Vehicle.php";
?>