<?php include_once "header.php" ?>
<?php require "../Controller/basket.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berwyn Buses | Basket</title>
    <script src="js/basketControl.js"></script>
</head>
<body>
<button onclick="checkID(9)"></button>
<div class="container">
	 <div class="jumbtron">
	    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">


			<thead>
			  <tr>
          <th class="th-sm">
          </th>
				<th class="th-sm">Vehicle
				</th>
				<th class="th-sm">Price
				</th>
			  </tr>
			</thead>

      <?php foreach ($results as $vehicle):?>
          <tr>
       
            <td><?=$vehicle->id?></td>

            <td><?=$vehicle->vehicleMake?></td>

            <td><?=$vehicle->hourlyPrice?></td>
          </tr> 
    
      
            <?php endforeach ?>    
           
        </tbody>
    </table>
    
    <a href="checkout.php"><button type="Submit" class="btn btn-danger wrn-btn" name="Checkout">Checkout</button></a>
</div>
</div>
<script> 
var vehicles = [0,1,9]


function checkID(integer) {
 if(vehicles.includes(integer)) {
     return true;
 }
 else {
     return false;
 }
}
</script>
</body>
</html>