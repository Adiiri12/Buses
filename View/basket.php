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

<h1>Basket</h1>

<?php if(count($make)==0): ?>
<br>
  <h1>Nothing in basket at the moment! Get shopping... Even though we are only in it for the ad revenue</h1>
  <a href="../View/Vehicle.php"><button type="Submit" class="btn btn-danger wrn-btn" name="Back To Browse">&larr; Back To Browse</button></a>
<?php endif ?>


<?php if(count($make)!=0): ?>
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
          <th class="th-sm"> Remove Item
          </th>
			</thead>
      <!--I = I+ 2 is temporary solution to duplicate items in the basket !! ASK PAUL -->
      <?php for ($i = 0; $i <count($make); $i=$i+2):?>
          <tr>
              <td><?= $make[$i]?></td>
              <td>£<?= $price[$i]?></td>
              <td><img src ="<?= $links[$i]?>" style = "height: 7rem;"></td>
              <form action="../Controller/basket.php" method="post">
                <td>
                  <input value ="Remove" name = "remove" type="submit" class="btn btn-primary">
                  <input type = "hidden" value=<?= $i ?> name ="indexVar">
                </td>
              </form>
          </tr>     
            <?php endfor ?>
            <tr>
            <td><b>Total</b></td>
            <td><b>£<?= array_sum($price) / 2?></b></td>
            <td></td>
            </tr>    

        </tbody>
    </table>
    <br>
  
    <form action="../Controller/basket.php" method="post">
              <input value="Clear Basket" type="submit" class="btn btn-primary" name="clear" style="background-color:#C14242;">
    </form>
    <br>
    <a href="checkout.php"><button type="Submit" class="btn btn-danger wrn-btn" name="Checkout">Checkout</button></a>
    <?php endif ?>

</div>
</div>

</body>
</html>