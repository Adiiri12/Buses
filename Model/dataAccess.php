<?php
$pdo = new PDO("mysql:host=kunet;dbname=dbAk1738426","k1738426","harry",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
   
function getAllVehicles() {
        global $pdo;
        $statement = $pdo->prepare("SELECT * FROM Vehicles");
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_CLASS, "Vehicle");
        return $results;
    }

?>