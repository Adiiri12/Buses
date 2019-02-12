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
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE price >= ? ORDER BY price");
    $statement->execute([$price]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}
function getVehicleByModel($vehicleName)
{  
 
    global $pdo;  
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE vehicleName = ?");
    $statement->execute([$vehicleName]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}
function getVehicleBySeats($numberOfPassengers)
{  
 
    global $pdo;  
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE numberOfPassengers >= ?");
    $statement->execute([$numberOfPassengers]);
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
    
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM `Vehicles` WHERE price >=? and vehicleName =? and numberOfPassengers >= ? ORDER BY price");
    $statement->execute([$price,$vehicleName,$numberOfPassengers]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}