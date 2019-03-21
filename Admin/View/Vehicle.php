</div>
</div>
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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />       
  <link rel="stylesheet" href="../View/styles/Style.css" class="stylesheet">
  <script type = "text/javascript" src = "../View/js/Amain.js"></script>
 
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
		  <div class="col-md-4">
			 <div class="card" style="padding:0;">
                    <h5 class="card-header bg-success text-white bg-dark border border-bginfo">Vehicles</h5>
                       <div class="card-body">
                            <div class="form-row mb-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addVehicle">
                                         Add Vehicle
                            </button> 
                       </div>
                </div>
          </div>
		</div>
    
  

<!-- Modal -->
<div class="modal fade" id="addVehicle" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Promotion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     <!-- <form class="form-horizontal" role="form" action = "" method="post" id ="form"> -->
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="InputvehicleName">vehicleName</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        id="InputvehicleName" placeholder="vehicleName"
                        name = "vehicleMake" required/>
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
                      <button class="btn btn-primary" id ="Adds" data-dismiss="modal">Add Vehicle</button>
                    </div>
                  </div>
              <!--  </form> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Search Form -->



			 <!--<div class="row my-4">-->
				<div class="col-md-8">
				  <div class="card" style="padding:0;">
                     <h5 class="card-header bg-success text-white bg-dark border border-bginfo">List Of Vehicles</h5>
                            <div class="card-body" style="padding-left: 5px;padding-right: 5px;padding-top: 8px;">
							     <div class ="container">
							        <div class ="row">
                                    <table id = "Vehicle" class="table" style = "table-layout: fixed;width: 100%;">
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
                                            <tr id = "<?=$vehicle->vehicle_id?>">
                                               <td><?=$vehicle->vehicleMake?></td>
                                               <td><?=$vehicle->numberOfSeats?></td>
                                               <td><?=$vehicle->vehicleType?></td>
                                               <td><?=$vehicle->licenceRequried?></td>
                                               <td><?=$vehicle->hourlyPrice?></td>
                                               <td><img src=<?=$vehicle->links?> height="50" width="50"></td>
                                               <td >
                                               <a href="edit.php?id=<?=$vehicle->vehicle_id?>" class="btn btn-success btn-sm" ><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                               </td>
                                              <td>
                                              <button id = "delete" class='btn btn-danger btn-sm'>Delete</button>
                                              </td>
                                          </tr>    
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