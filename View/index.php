<?php include_once "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title>Berwyn Buses | Home</title>
</head>
<body>
<div class="container">
  <h2 style="text-align:center;">Promotions!</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="./assets/myBigBus.jpg" alt="The Bus 1" style="width:100%;">
        <h3>New Bus here</h3>
        <p>50% off! Expires 03/07/19</p>
      </div>

      <div class="item">
        <img src="./assets/myBigBus.jpg" alt="The Bus 2" style="width:100%;">
        <h3>New Bus here</h3>
        <p>50% off! Expires 03/07/19</p>
      </div>
    
      <div class="item">
        <img src="./assets/myBigBus.jpg" alt="The Bus 3" style="width:100%;">
        <h3>New Bus here</h3>
        <p>50% off! Expires 03/07/19</p>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
</body>
</html>