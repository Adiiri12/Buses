<?php include_once "header.php"?>
<?php require_once "../Controller/booking.php"?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="../View/styles/styles.css" class="stylesheet">
     <title>Berwyn Buses</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="../View/js/process.js"></script>
 
 </head>
 <body onload="showMessage()">
 <h2>CHECKOUT</h2>


<div id="submit">Thank you. Your order is being processed.</div>

 <center><h4 style="padding-top:60px; padding-bottom:10px">Thank you <span><?=$name?></span>, your order is being processed</h4>
 <a href="../View/Vehicle.php"><button class="btn btn-success" >Back to Browse</button></a></center>

 
 </body>
 </html>