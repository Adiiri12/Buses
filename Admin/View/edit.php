<?php
require_once "../View/index.php";
require_once "../Controller/edit.php"
?>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="../View/styles/styl4.css" class="stylesheet">
  <script type = "text/javascript" src = "..\js\edit.js"></script>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update Vehicle</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($error)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <?php foreach ($results as $vehicle) : ?>
      <!--<form method="POST" action = "../Controller/edit.php?id=>-->
        <div class="form-row">
             <div class = "form-group col-md-6">
          <label for="Make">Vehicle Name</label>
          <input type="hidden" name="id" value="<?=$vehicle->vehicle_id?>">
          <input value="<?=$vehicle->vehicleMake?>" type="text" name="Make"  class="form-control">
            </div>
          <div class="form-group col-md-6">
          <label for="Type"> Vehicle Model</label>
          <input type="text" value="<?=$vehicle->vehicleType?>" name="Type"  class="form-control">
        </div>
    </div>
    <div class="form-row">
             <div class = "form-group col-md-4">
          <label for="Seats">NumberOfSeats</label>
          <input value="<?=$vehicle->numberOfSeats?>" type="number" name="Seats"  class="form-control">
            </div>
          <div class="form-group col-md-4">
          <label for="Requried">LicenceRequried</label>
          <input type="text" value="<?=$vehicle->licenceRequried?>" name="Requried"  class="form-control">
        </div>
        <div class="form-group col-md-4">
          <label for="Price">HourlyPrice</label>
          <input type="text" value="<?=$vehicle->hourlyPrice?>" name="Price"  class="form-control">
        </div>
    </div>
     
     <div class = "form-group">
        <label for="Link">Vehicle Link</label>
          <input value="<?=$vehicle->links?>" type="text" name="Link"  class="form-control">
            </div>

        <div class="form-group">
          <button id = "update" class="btn btn-success" name = "submit" >Update Vehicle</button>
        </div>
      <?php  endforeach ?>
    </div>
  </div>
</div>