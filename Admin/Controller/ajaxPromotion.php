<?php
header('Content-Type: application/json');
require_once "../Model/Vehicle.php";
require_once "../Model/Promotion.php";
require_once "../Model/dataAccess.php";
    
    


    if(isset($_REQUEST["id"]))
    {
        $result = showPromotion();
        echo json_encode($result);
    }
    else
    {
        $result = showPromotion();
        echo json_encode($result);

    }

   
?>