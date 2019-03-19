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
   
 <div class="column1">
    <h3> Create an account</h3>
        <form action="../Controller/account.php" method="POST">
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required><br>
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required><br>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required><br>
            <label for="rpsw"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="rpsw" required><br>
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>
            <button class="btn btn-primary" type="submit">Create an Account</button>
            <input name="submit" type="hidden" value="submit"/>
        </form>
    <h3> Login</h3>
        <form action="../Controller/booking.php" method="Post">
            <input type="text" value = "Email" placeholer="Email" name = "email">
            <input type="password" value = "Password" name="password">
            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>
            <button type="submit" class="btn btn-primary" value="Place Order" name = "placeOrder">Place Order</button>
        </form>

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
     <br>
<?php include_once"footer.php" ?>
 
 </body>
 </html>