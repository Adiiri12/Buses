<?php
require_once "../Controller/Vehicle.php";
require_once "../View/index.php";
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
  <link rel="stylesheet" href="../View/styles/styl4.css" class="stylesheet">
  <title>Berwyn Buses | Vehicle</title>
</head>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Berwyn Buses | Vehicle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<?php if($Vehicle != " "): ?>

  <span style="color:Green"><?=$Vehicle?></span>

<?php endif ?>
	

<!-- Search Form -->

			 
    <div class="container">
       <div class ="row my-4">
		  <div class="col-md-12">
			 <div class="card" style="padding:0;">
                    <h5 class="card-header bg-success text-white bg-dark border border-bginfo">Vehicles</h5>
                       <div class="card-body">
                            <div class="form-row mb-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                         Add Vehicle
                            </button> 
                       </div>
         </div>
       </div>
		</div>
  
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Vehicle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" role="form" action = "../Controller/Vehicle.php" method="POST" >
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="InputvehicleName">vehicleName</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        id="InputvehicleName" placeholder="vehicleName"
                        name = "vehicleMake" requried/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputVehicleType" >VehicleModel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="inputVehicleType" placeholder="vehicleType"
                            name = "vehicleType" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="InputnumberOfSeats" >NumberOfSeats</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control"
                            id="InputnumberOfSeats" placeholder="NumberOfSeats"
                            name = "numberOfSeats" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="InputlicenceRequried">LicenceRequried</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="InputlicenceRequried" placeholder="LicenceRequried"
                            name = "licenceRequried" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="InputhourlyPrice">HourlyPrice</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control"
                            id="InputhourlyPrice" placeholder="HourlyPrice"
                            name="hourlyPrice" required/>
                    </div>
                  </div><div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="Inputlinks">Imagelinks</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="Inputlinks" placeholder="Imagelinks" name="links" required/>
                    </div>
                  </div>

                  <div class="form-group text-centre">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="Submit" name = "Submit" class="btn btn-primary">Add Vehicle</button>
                    </div>
                  </div>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Search Form -->



			 <div class="row my-4">
				<div class="col-md-12">
				  <div class="card" style="padding:0;">
                     <h5 class="card-header bg-success text-white bg-dark border border-bginfo">List Of Vehicles</h5>
                            <div class="card-body" style="padding-left: 5px;padding-right: 5px;padding-top: 8px;">
							     <div class ="container">
							        <div class ="row">
                                    <table class="table" style = "table-layout: fixed;width: 100%;">
                                        <thead class="thead-dark">
                                                <tr>
                                                <th scope="col">vehicleMake</th>
                                                <th scope="col">numberOfSeat</th>
                                                <th scope="col">vehicleType</th>
                                                <th scope="col">licenceType</th>
                                                <th scope="col">hourlyPrice</th>
                                                <th scope="col">links</th>
                                                <th scope="col-sm-2">Edit</th>
                                                <th scope="col-sm-2">Delete</th>

                                               </tr>
                                        </thead>
                                         <tbody>
                                         <?php foreach ($results as $vehicle) : ?>
                                            <tr>
                                               <td><?=$vehicle->vehicleMake?></td>
                                               <td><?=$vehicle->numberOfSeats?></td>
                                               <td><?=$vehicle->vehicleType?></td>
                                               <td><?=$vehicle->licenceRequried?></td>
                                               <td><?=$vehicle->hourlyPrice?></td>
                                               <td><img src=<?=$vehicle->links?> height="50" width="50"></td>
                                               <td >
                                               <a href="#edit_<?=$vehicle->vehicle_id?>" class="btn btn-success btn-sm" data-toggle="modal" ><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                               </td>
                                              <td><a href = "../Controller/delete.php?delete=<?=$vehicle->vehicle_id?>"><i class='fas fa-trash-alt' style='font-size:36px'></i></td>
                                          </tr>    
                                              <?php include "../View/editModal.php"; ?>
                                              <?php endforeach ?>
                                         </tbody>
                                    </table>
                                </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
	</body>
</html>