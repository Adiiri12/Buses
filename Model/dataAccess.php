<?php
include_once "../Model/database.php";

/* Drivers data access */
function getAllDrivers(){
    $database = Database::getInstance();
    $db = $database->openConnection();
 
    $statement =$db->prepare("SELECT * FROM Driver");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Driver");
    return $results;
}
/* Drivers data access */


/*Basket Data Access */

function getVehiclesByIdBasket($id) {
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement = $db->prepare("SELECT * FROM Vehicles WHERE vehicle_id = ?");
    $statement->execute([$id]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}

function addBooking($booking) {
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement = $db->prepare("INSERT INTO Booking ( customer_id, driver_id, vehicle_id, dateFrom, dateTo)   VALUES (?,?,?,?,?)");
    $statement->execute([ $booking->customer_id, $booking->driver_id, $booking->vehicle_id, $booking->dateFrom, $booking->dateTo]);
}

/*Basket Data Access */

/* Vehicle data Access */
function getAllVehicles(){
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement =$db->prepare("SELECT * FROM Vehicles");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}

function showAvaliabiltyByAllInputs($date,$edate,$make,$seats,$licenceRequried,$price)
{
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement = $db -> prepare("SELECT Vehicles.vehicle_id as vehicle_id , Vehicles.vehicleMake as vehicleMake ,Vehicles.vehicleType as vehicle_type,
                                  Vehicles.hourlyPrice as hourlyPrice , Vehicles.numberOfSeats as numberOfSeats, Vehicles.links As links,
                                  Vehicles.licenceRequried as licenceRequried
                                  FROM Vehicles 
                                  LEFT JOIN (Select * FROM Booking
                                   WHERE Booking.dateFrom = :date and Booking.dateTo = :edate)
                                    AS Booking ON Vehicles.vehicle_id = Booking.vehicle_id
                                    WHERE Booking.vehicle_id IS NULL
                                    AND Vehicles.vehicleMake LIKE :make AND Vehicles.numberOfSeats >= :seats AND
                                    Vehicles.licenceRequried LIKE  :licenceRequried  AND Vehicles.hourlyPrice >= :price
                                    ORDER BY Vehicles.hourlyPrice");
  

    //Create our Wildcards For the Like Opreator 
    $make = "%$make%";
    $licenceRequried = "%$licenceRequried%";

    //Bind our parameter
    $statement->bindValue(':date', $date);
    $statement->bindValue(':edate', $edate);
    $statement->bindValue(':make', $make);
    $statement->bindValue(':seats', $seats);
    $statement->bindValue(':licenceRequried', $licenceRequried);
    $statement->bindValue(':price', $price);

    $statement->execute();


    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;


                                 
}

/* Vehicle data Access */

/* Account data access */


function getUserByLogin($user)
{
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement = $db->prepare("SELECT * FROM Account WHERE email =?");
    $statement->execute([$user]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Account");
    return $results;
}//end function to get a user by login

function addAccount($account)
{
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement = $db->prepare("INSERT INTO Account
        (email, username, user_password) VALUES (?,?,?)");
    $statement->execute([$account->email,
                        $account->username,
                        $account->user_password]);
}//end function to add a user account to the database


/* Account data access */ 
/* Promotion data access */


function showPromotion()
{
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement = $db->prepare("SELECT Promotions.promotion_id as promotion_id , Promotions.vehicle_id As vehicle_id,
                                 Promotions.promotionDate as promotionDate , Promotions.promotionExpiryDate As promotionExpiryDate,
                                  Vehicles.vehicleMake as Make,Vehicles.vehicleType as Vehicle_type , Vehicles.links As Vehicle_link ,
                                 Vehicles.hourlyPrice as price FROM Promotions INNER JOIN Vehicles on Promotions.vehicle_id =  Vehicles.vehicle_id");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Promotion");
    return $results;
}






