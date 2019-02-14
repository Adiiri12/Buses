<?php include_once "header.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berwyn Buses | Basket</title>
</head>
<body>
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
			<?php foreach ($vehicle as $vehicles):?>
            <tr>
                <td><?=$vehicle->vehicleName?></td>
                <td><?=$vehicle->price?></td>
            </tr>
        <?php endforeach ?>     
        </tbody>
    </table>
    
    <button type="button" class="btn btn-danger wrn-btn">Checkout</button>
</div>
</div>
</body>
</html>