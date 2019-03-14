<?php
$pdo = new PDO("mysql:host=kunet;dbname=dbAk1738426","k1738426","harry",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

/*Customers data access */

function getAllCustomers() {
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM Customer");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Customer");
    return $results;
}

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
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE hourlyPrice >=? and vehicleMake =? and numberOfSeats >= ? and licenceRequried = ? ORDER BY hourlyPrice");
    $statement->execute([$price,$vehicleName,$numberOfPassengers,$licenceRequried]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}
function CheckVehicleExists($vehicleName,$vehicleType)
{
    global $pdo;  
    $statement = $pdo->prepare("SELECT * FROM Vehicles WHERE  vehicleMake = ? AND vehicleType = ?");
    $statement->execute([$vehicleName,$vehicleType]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}

/* Vehicle data Access */

/* Admin data Access */

function getAdminByLoggin($User)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM admin WHERE username =? LIMIT 1");
    $statement->execute([$User]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Admin");
    return $results;
}

function createAdminAccount($admin)
{
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO admin (email_address,username,user_password,admin_name)
                                 VALUES (?,?,?,?)");
    $statement->execute([$admin->email_address,$admin->username,$admin->user_password,$admin->admin_name]);

}
 
/*
Function checkUserExists($user)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM admin WHERE username =?");
    $statement->execute([$user]);
    $results = $statement->fetch(PDO::FETCH_ASSOC);
    return $results;
}
*/

function AddNewVehicle($admin)
{
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO Vehicles (vehicleMake,vehicleType,numberOfSeats,licenceRequried,
                                                      hourlyPrice,links)
                                                     VALUES (?,?,?,?,?,?)");
    $statement->execute([$admin->vehicleMake,$admin->vehicleType,$admin->numberOfSeats,$admin->licenceRequried,
                         $admin->hourlyPrice,$admin->links]);


}
function deleteVehicleById($id)

{
    
        global $pdo;
        $statement = $pdo->prepare("DELETE FROM Vehicles WHERE vehicle_id =?");
        $statement->execute([$id]);
    
}

function updateVehicleById($vehicleMake,$vehicleType,$numberOfSeats,$licenceRequried
                                                          ,$hourlyPrice,$links,$id)
{
    global $pdo;
    $statement = $pdo->prepare("UPDATE Vehicles SET vehicleMake =?, vehicleType =?,numberOfSeats =?,
                                licenceRequried =?, hourlyPrice =?, links=? WHERE vehicle_id =?");
    $statement->execute([$vehicleMake,$vehicleType,$numberOfSeats,$licenceRequried
                                                        ,$hourlyPrice,$links,$id]);

   
}

