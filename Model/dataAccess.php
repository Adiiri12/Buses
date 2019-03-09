<?php
$pdo = new PDO("mysql:host=kunet;dbname=dbAk1738426","k1738426","harry",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

/* Vehicle data Access */
function getAllVehicles(){
    global $pdo;
    $statement =$pdo->prepare("SELECT * FROM Vehicles");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}

function getVehiclesByID(){
    global $pdo;
    $statement =$pdo->prepare("SELECT * FROM Vehicles");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}
function getVehicleByLicence($licenceRequried)
{
    global $pdo;  
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE licenceRequried = ?");
    $statement->execute([$licenceRequried]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}
function getVehicleByPrice($price)
{  
 
    global $pdo;  
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE hourlyPrice >= ? ORDER BY hourlyPrice");
    $statement->execute([$price]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}
function getVehicleByModel($vehicleName)
{  
 
    global $pdo;  
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE vehicleMake = ?");
    $statement->execute([$vehicleName]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}
function getVehicleBySeats($numberOfPassengers)
{  
 
    global $pdo;  
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE numberOfSeats >= ?");
    $statement->execute([$numberOfPassengers]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}

function getVehicleByPriceAndSeats($price,$numberOfPassengers)
{
    global $pdo;  
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE hourlyPrice >= ? And numberOfSeats >= ? ORDER BY hourlyPrice");
    $statement->execute([$price,$numberOfPassengers]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}
function getVehicleByPriceAndLicence($price,$licenceRequried)
{
    global $pdo;  
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE hourlyPrice >= ? And licenceRequried = ? ORDER BY hourlyPrice");
    $statement->execute([$price,$licenceRequried]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}
function getVehicleByModelAndSeats($numberOfPassengers,$vehicleName)
{
    global $pdo;  
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE numberOfSeats >= ? And vehicleMake = ? ORDER BY hourlyPrice");
    $statement->execute([$vehicleName,$numberOfPassengers]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}
function getVehicleByModelAndPrice($vehicleName,$price)
{
    global $pdo;  
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE  vehicleMake = ? AND hourlyPrice >= ?  ORDER BY hourlyPrice");
    $statement->execute([$vehicleName,$price]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}
function getVehicleByModelAndPriceAndLicenceRequried($vehicleName,$price,$licenceRequried)
{
    global $pdo;  
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE  vehicleMake = ? AND hourlyPrice >= ? AND licenceRequried = ? ORDER BY hourlyPrice");
    $statement->execute([$vehicleName,$price,$licenceRequried]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results; 
}
function getVehicleByModelAndPriceAndNumberOfPassengers($vehicleName,$price,$numberOfPassengers)
{
    global $pdo;  
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE  vehicleMake = ? AND hourlyPrice >= ? AND numberOfSeats >= ? ORDER BY hourlyPrice");
    $statement->execute([$vehicleName,$price,$numberOfPassengers]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results; 
}
function getVehicleByPriceAndNumberOfPassengersAndLicenceRequried($licenceRequried,$price,$numberOfPassengers)
{
    global $pdo;  
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE  licenceRequried = ? AND hourlyPrice >= ? AND numberOfSeats >= ? ORDER BY hourlyPrice");
    $statement->execute([$licenceRequried,$price,$numberOfPassengers]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results; 
}
function getVehicleByAllInputs($price,$vehicleName,$numberOfPassengers,$licenceRequried)
{  
  

    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM `Vehicles` WHERE hourlyPrice >=? and vehicleMake =? and numberOfSeats >= ? and licenceRequried = ? ORDER BY hourlyPrice");
    $statement->execute([$price,$vehicleName,$numberOfPassengers,$licenceRequried]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}
/* Vehicle data Access */

/* Account data access */

function addAccount($account)
{
    global $pdo;
    $statement = $pdo->prepare('INSERT INTO account
        (email, username, user_password) VALUES (?,?,?)');
    $statement->execute([$account->email,
                        $account->username,
                        $account->user_password]);
}
/* Account data access */ 