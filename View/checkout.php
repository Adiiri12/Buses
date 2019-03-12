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
       <label for="email"><b>Email</b></label>
       <input type="text" placeholder="Enter Email" name="email" required><br>

       <label for="username"><b>Username</b></label>
       <input type="text" placeholder="Enter Username" name="username" required><br>

       <label for="psw"><b>Password</b></label>
       <input type="password" placeholder="Enter Password" name="psw" required><br>

        <a href="../View/checkoutAfterSignup.php"><button class="btn btn-primary" type="button">Create an Account</button></a> 
         <h3> Or Login...</h3>

       <label for="email"><b>Email</b></label>
       <input type="text" placeholder="Enter Email" name="email" id="email" required>

       <label for="psw"><b>Password</b></label>
       <input type="password" placeholder="Enter Password" name="psw" id="password" required>
        
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