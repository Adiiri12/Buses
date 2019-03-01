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
  <link rel="stylesheet" href="../View/styles/styl4.css" class="stylesheet">
  <title>Berwyn Buses | Vehicle</title>
</head>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Berwyn Buses | Vehicle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body class>
	
 


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
      <form class="form-horizontal" role="form" action >
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                              for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                        id="inputEmail3" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control"
                            id="inputPassword3" placeholder="Password"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="Vehicle" >Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control"
                            id="Vehicle" placeholder="Password"/>
                    </div>
                  </div>
                  <div class="form-group text-centre">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="Submit" class="btn btn-primary">Sign in</button>
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
                                    <table class="table" style = "table-layout: fixed; width: 100%;">
                                        <thead class="thead-dark">
                                                <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">vehicleMake</th>
                                                <th scope="col">numberOfSeats</th>
                                                <th scope="col">vehicleType</th>
                                                <th scope="col">licenceRequried</th>
                                                <th scope="col">hourlyPrice</th>
                                                <th scope="col">links</th>

                                               </tr>
                                        </thead>
                                         <tbody>
                                         <?php foreach ($results as $vehicle) : ?>
                                            <tr>
                                               <td><?=$vehicle->vehicle_id?></td>
                                               <td><?=$vehicle->vehicleMake?></td>
                                               <td><?=$vehicle->numberOfSeats?></td>
                                               <td><?=$vehicle->vehicleType?></td>
                                               <td><?=$vehicle->licenceRequried?></td>
                                               <td><?=$vehicle->hourlyPrice?></td>
                                               <td style="word-wrap: break-word"><?=$vehicle->links?></td>
                                              </tr>
                                              <?php endforeach ?>  
                                         </tbody>
                                    </table>
						
										 



         



</body>
</html>