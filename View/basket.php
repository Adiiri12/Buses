<?php include_once "header.php" ?>
<?php require "../Controller/basket.php"?>

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

<?php if(count($basket)==0): ?>
  <h1>Nothing in basket at the moment! Get shopping... Even though we are only in it for the ad revenue</h1>
<?php endif ?>


<?php if(count($basket)!=0): ?>
<div class="jumbtron">
	    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
			<thead>
			  <tr>
          <th class="th-sm"> Vehicle Name
          </th>
			</thead>
      <?php foreach ($basket as $vehicle):?>
          <tr>
              <td><?= $vehicle?></td>
          </tr>       
            <?php endforeach ?>    
<?php endif ?>
        </tbody>
    </table>
    
    <a href="checkout.php"><button type="Submit" class="btn btn-danger wrn-btn" name="Checkout">Checkout</button></a>
</div>
</div>

</body>
</html>