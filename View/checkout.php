<?php include_once "header.php"?>
<?php require_once "../Controller/basket.php"?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="../View/styles/styles.css" class="stylesheet">
     <title>Berwyn Buses</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
 </head>
 <body>
 <h2>CHECKOUT</h2>
 <br>
    <h3> Create an account</h3>
 <div class="column1">

        <p>FORM FORM FORM</p>
        <p>FORM FORM FORM</p>
        <p>FORM FORM FORM</p>
        <p>FORM FORM FORM</p>
        <p>FORM FORM FORM</p>
        <p>FORM FORM FORM</p>
        <p>FORM FORM FORM</p>
        <a href="createAccount.php"><button class="btn btn-primary" type="button">Create an Account</button></a> 
         <h3> Or Login...</h3>

         <p>FORM FORM FORM</p>
        <p>FORM FORM FORM</p>
         <a href="Login.php"><button class="btn btn-primary" type="button">Login</button></a> 
     </div>
   <div class="column2">
    <h3>In your Basket...</h3>
         <div class="scroll">
         <?php foreach ($vehicles as $vehicle):?>
             <img src="<?= $vehicle->links ?>" alt="Image of booked Vehicle"style="width:200px;height:200px;">
             <p><?=$vehicle->vehicleMake?> : £<?= $vehicle->hourlyPrice ?> </p>
         <?php endforeach ?>  
         </div>
         <h5> Total: £<?= array_sum($total)?></h5>
     </div>
<?php include_once"footer.php" ?>
 
 </body>
 </html>