<?php
require_once "../Model/Vehicle.php";
require_once "../Model/Promotion.php";
require_once "../Model/dataAccess.php";

if(isset($_REQUEST["Edate"]) && isset($_REQUEST["date"]) && isset($_REQUEST["id"]))
    {
        $promotion = new Promotion();
        $promotion->vehicle_id = htmlentities($_REQUEST["id"]);
        $promotion->promotionDate = htmlentities($_REQUEST["date"]);
        $promotion->promotionExpiryDate = htmlentities($_REQUEST["Edate"]);

        addPromotion($promotion);

        echo("true");



    }

    $results = showPromotion();
    $VehicleList = getAllVehicles();

?>