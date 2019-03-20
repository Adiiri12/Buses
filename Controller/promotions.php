<?php
require_once "../Model/Promotions.php";
require_once "../Model/Vehicle.php";
require_once "../Model/dataAccess.php";

$results = getAllVehicles();
$promotion = showPromotion();

?>