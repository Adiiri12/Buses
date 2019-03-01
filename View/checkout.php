<?php include_once "header.php"?>
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
 
     <div class="column1">
         <form>
             Email:&emsp;<input type="text" name="email"><br><br>
             First Name:&emsp;<input type="text" name="firstname"><br><br>
             Last Name:&emsp;<input type="text" name="lastname"><br><br>
         </form>
         <p>6 seat MPV: £55 x 4hr = £220</p>
         <p>10 seat VIP: £55 x 2hr =<u> £110</u></p>
         <p style="margin-left:110px">Total: £330</p>
         <a href="process.php"><button type="button">CHECKOUT</button></a> 
     </div>
<!--     <div class="column2">
         <div class="scroll">
             <img src="assets/myBigBus.jpg" alt="6 seat MVP"style="width:200px;height:200px;">
             <p>6 seat MVP</p>
             <img src="assets/myBigBus.jpg" alt="10 seat VIP"style="width:200px;height:200px;">
             <p>10 seat VIP</p>
         </div>
     </div>-->
<?php include_once"footer.php" ?>
 
 </body>
 </html>