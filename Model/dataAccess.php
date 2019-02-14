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
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE hourlyPrice >= ? ORDER BY hourlyPrice And numberOfSeats >= ?");
    $statement->execute([$price,$numberOfPassengers]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}

function getVehicleByAllInputs($price,$vehicleName,$numberOfPassengers)
{
    if($vehicleName == "" && $price == "" && $numberOfPassengers == "" )
    {
        return getAllVehicles();
    }
    elseif($vehicleName != "" && $price == "" && $numberOfPassengers =="")
    {
        return getVehicleByModel($vehicleName);
    }
    elseif($price !== "" && $vehicleName == "" && $numberOfPassengers == "")
    {
        return getVehicleByPrice($price);
    }
    elseif($numberOfPassengers != "" && $vehicleName == "" && $price == "")
    {
        return getVehiclebySeats($numberOfPassengers);
    }
    elseif($numberOfPassengers != "" && $price != "" && $vehicleName == "")
    {
        return getVehicleByPriceAndSeats($price,$numberOfPassengers);
    }
    
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM `Vehicles` WHERE hourlyPrice >=? and vehicleMake =? and numberOfSeats >= ? ORDER BY hourlyPrice");
    $statement->execute([$price,$vehicleName,$numberOfPassengers]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}
/* Vehicle data Access */