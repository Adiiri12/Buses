<?php
$pdo = new PDO("mysql:host=localhost;dbname=test1","Abdullahi","Morning8",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

/* Vehicle data Access */
function getAllVehicles(){
    global $pdo;
    $statement =$pdo->prepare("SELECT * FROM Vehicles");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}

function getVehiclesByID($id){
    global $pdo;
    $statement =$pdo->prepare("SELECT * FROM Vehicles WHERE vehicle_id = ?");
    $statement->execute([$id]);
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

  if($vehicleName = "")
  {
    $results = getAllVehicles();
    return $results;
  }
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

Function getAdminByLoggin($User)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM admin WHERE username =? LIMIT 1");
    $statement->execute([$User]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Admin");
    return $results;
}

Function createAdminAccount($admin)
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

Function AddNewVehicle($admin)
{
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO Vehicles (vehicleMake,vehicleType,numberOfSeats,licenceRequried,
                                                      hourlyPrice,links)
                                                     VALUES (?,?,?,?,?,?)");
    $statement->execute([$admin->vehicleMake,$admin->vehicleType,$admin->numberOfSeats,$admin->licenceRequried,
                         $admin->hourlyPrice,$admin->links]);


}
Function deleteVehicleById($id)

{
    
        global $pdo;
        $statement = $pdo->prepare("DELETE FROM Vehicles WHERE vehicle_id =?");
        $statement->execute([$id]);
    
}

Function updateVehicleById($vehicleMake,$vehicleType,$numberOfSeats,$licenceRequried
                                                          ,$hourlyPrice,$links,$id)
{
    global $pdo;
    $statement = $pdo->prepare("UPDATE Vehicles SET vehicleMake =?, vehicleType =?,numberOfSeats =?,
                                licenceRequried =?, hourlyPrice =?, links=? WHERE vehicle_id =?");
    $statement->execute([$vehicleMake,$vehicleType,$numberOfSeats,$licenceRequried
                                                        ,$hourlyPrice,$links,$id]);

   
}
function showPromotion()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT Promotions.promotion_id as promotion_id , Promotions.vehicle_id As vehicle_id,
                                 Promotions.promotionDate as promotionDate , Promotions.promotionExpiryDate As promotionExpiryDate,
                                  Vehicles.vehicleMake as Make,Vehicles.vehicleType as Vehicle_type , Vehicles.links As Vehicle_link ,
                                 Vehicles.hourlyPrice as price FROM Promotions INNER JOIN Vehicles on Promotions.vehicle_id =  Vehicles.vehicle_id");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Promotion");
    return $results;
}

function addPromotion($promotion){

    global $pdo;
    $statement = $pdo->prepare("INSERT INTO promotions (vehicle_id,promotionDate,promotionExpiryDate)
                                                     VALUES (?,?,?)");
    $statement->execute([$promotion->vehicle_id,$promotion->promotionDate,$promotion->promotionExpiryDate]);

}
  
function promotionDeleteVehicleById($id) {
    
        //echo("jghkl;jhk");
        global $pdo;
        $statement = $pdo->prepare("DELETE FROM promotions WHERE vehicle_id =?");
        return $statement->execute([$id]);
    
}


