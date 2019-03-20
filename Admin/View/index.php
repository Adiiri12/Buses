<?php
require_once "../Controller/index.php"
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="../View/styles/Style.css" class="stylesheet">
<script type = "text/javascript" src = "../View/js/edit.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="../View/index.php">Admin</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="../View/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../View/promotion.php">Promotions</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../View/Vehicle.php">Vehicles</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../View/Vehicle.php">Bookings</a>
      </li>
      </ul>
      <ul class = "navbar-nav navbar-right">
      <li class = "nav-item active col">
      <a class ="nav-link btn btn-success" href= "../Controller/Logout.php">Logout</a>
      </li>
    </ul>
  <?php if($message != " "): ?>
  <ul class = "navbar-nav navbar-center">
   
   <span style="black"><?=$message?></span>

   </ul>
  <?php endif ?>
  </div>
</nav>
</body>

<?php if($message != " "): ?>

  <span style="black"><?=$message?></span>

<?php endif ?>
</html>