<?php include_once "header.php" ?>
<?php require_once "../Controller/basket.php"?>

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

<h1>Basket</h1>

<?php if(count($vehicles)==0): ?>
<br>
  <h2>Nothing in basket at the moment! Get shopping... Even though we are only in it for the ad revenue</h2>
  <a href="../View/Vehicle.php"><button type="Submit" class="btn btn-danger wrn-btn" name="Back To Browse">&larr; Back To Browse</button></a>
<?php endif ?>


<?php if(count($vehicles)!=0): ?>
<div class="jumbtron">
	    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
			<thead>
			  <tr>
          <th class="th-sm"> Vehicle Name
          </th>
          <th class="th-sm"> Vehicle Price
          </th>
          <th class="th-sm"> Image
          </th>
    <th class="th-sm"> Add Driver
          </th>
          <th class="th-sm"> Remove Item
          </th>
			</thead>

      <?php for($i = 0; $i<sizeof($vehicles); $i++):?>
          <tr>
              <td><?= $vehicles[$i]->vehicleMake?></td>
              <td>£<?= $vehicles[$i]->hourlyPrice?></td>
              <td><img src ="<?= $vehicles[$i]->links?>" style = "height: 7rem;"></td>
              <td>
              <input type="radio" name="Driver" value="Yes" /> Yes
              <input type="radio" name="Driver" value="No" /> No
              </td>
              <form action="../Controller/basket.php" method="post">
                <td>
                  <input value ="Remove" name = "remove" type="submit" class="btn btn-primary">
                  <input type = "hidden" value="<?=$i ?>" name ="indexVar">
                </td>
                
              </form>
          </tr>     
            <?php endfor ?>
            <tr>
            <td><b>Total</b></td>
            <td><b>£<?= array_sum($total)?></b></td>
            <td></td>
            <td></td>
            </tr>    

        </tbody>
    </table>
    <br>
    <form action="../Controller/basket.php" method="post">
    <!--TODO: Use js to make min date today-->
    <!--TODO: Make Return Date greater than date required-->
    <h5>Date Required:</h5>
     <input type="date" class="controls form-control" placeholder="Date" name = "dateFrom" min="2019-01-01" required/>
     <br>
     <h5>Return Date:</h5>
     <input type="date" class="controls form-control" placeholder="Date" name = "dateTo" required/>
     <br>
     <a href="../View/checkout.php"><button type="Submit" class="btn btn-danger wrn-btn" name="checkout">Checkout</button></a>
    </form>

    <br>

    <form action="../Controller/basket.php" method="post">
              <input value="Clear Basket" type="submit" class="btn btn-primary" name="clear" style="background-color:#C14242;">
    </form>

  
    <?php endif ?>

</div>
</div>

</body>
</html>