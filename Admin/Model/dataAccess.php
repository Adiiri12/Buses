<?php
include_once "../Model/database.php";
/* Vehicle data Access */
function getAllVehicles(){
    //global $pdo;
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement =$db->prepare("SELECT * FROM Vehicles");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
   
}

function getVehiclesByID($id){
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement =$db->prepare("SELECT * FROM Vehicles WHERE vehicle_id = ?");
    $statement->execute([$id]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}
function CheckVehicleExists($vehicleName,$vehicleType)
{
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement = $db->prepare("SELECT * FROM Vehicles WHERE  vehicleMake = ? AND vehicleType = ?");
    $statement->execute([$vehicleName,$vehicleType]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Vehicle");
    return $results;
}

/* Vehicle data Access */

/* Admin data Access */

Function getAdminByLoggin($User)
{
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement = $db->prepare("SELECT * FROM admin WHERE username =? LIMIT 1");
    $statement->execute([$User]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Admin");
    return $results;
}

Function createAdminAccount($admin)
{
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement = $db->prepare("INSERT INTO admin (email_address,username,user_password,admin_name)
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
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement = $db->prepare("INSERT INTO Vehicles (vehicleMake,vehicleType,numberOfSeats,licenceRequried,
                                                      hourlyPrice,links,admin_id)
                                                     VALUES (?,?,?,?,?,?,?)");
    $statement->execute([$admin->vehicleMake,$admin->vehicleType,$admin->numberOfSeats,$admin->licenceRequried,
                         $admin->hourlyPrice,$admin->links,$admin->admin_id]);


}
Function deleteVehicleById($id)

{
    
        $database = Database::getInstance();
         $db = $database->openConnection();
        $statement = $db->prepare("DELETE FROM Vehicles WHERE vehicle_id =?");
        $statement->execute([$id]);
    
}

Function updateVehicleById($vehicleMake,$vehicleType,$numberOfSeats,$licenceRequried
                                                          ,$hourlyPrice,$links,$id)
{
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement = $db->prepare("UPDATE Vehicles SET vehicleMake =?, vehicleType =?,numberOfSeats =?,
                                licenceRequried =?, hourlyPrice =?, links=? WHERE vehicle_id =?");
    $statement->execute([$vehicleMake,$vehicleType,$numberOfSeats,$licenceRequried
                                                        ,$hourlyPrice,$links,$id]);

   
}
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

function addPromotion($promotion){

    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement = $db->prepare("INSERT INTO Promotions (vehicle_id,promotionDate,promotionExpiryDate,admin_id)
                                                     VALUES (?,?,?,?)");
    $statement->execute([$promotion->vehicle_id,$promotion->promotionDate,$promotion->promotionExpiryDate,$promotion->admin_id]);

}
  
function promotionDeleteVehicleById($id) {
    
        //echo("jghkl;jhk");
        $database = Database::getInstance();
        $db = $database->openConnection();
        $statement = $db->prepare("DELETE FROM Promotions WHERE vehicle_id =?");
        return $statement->execute([$id]);
    
}

function ShowBookings(){
    $database = Database::getInstance();
    $db = $database->openConnection();
    $statement = $db->prepare("SELECT * FROM Bookings");
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Booking");
    return $results;
}