<?php
require_once "../Controller/ajaxAddPromotion.php";
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css"/>
    <script src="https://cdn.jsdelivr.net/jquery.bootstrapvalidator/0.5.0/js/bootstrapValidator.min.js" type="text/javascript"></script>    
  <link rel="stylesheet" href="../View/styles/styl4.css" class="stylesheet">
  <script type = "text/javascript" src = "../View/js/promotion.js"></script>
 hello
  <title>Admin | Promotion</title>
</head>

<body>

	

<!-- Search Form -->

			 
    <div class="container">
       <div class ="row my-4">
		  <div class="col-md-4">
			 <div class="card" style="padding:0;">
                    <h5 class="card-header bg-success text-white bg-dark border border-bginfo">Promotion</h5>
                       <div class="card-body">
                            <div class="form-row mb-3">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPromotion">
                                         Add Promotion
                            </button> 
                       </div>
                </div>
          </div>
		</div>
    
  

<!-- Modal -->
<div class="modal fade" id="addPromotion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                  <div class="form-group col">
                    <label for="InputvehicleName">Release_Date</label>
                        <input type="text" class="controls form-control" 
                         placeholder="Date"
                        name = "ReleaseDate" id ="datepicker1" required/>
                  </div>
                  <div class="form-group col">  
                    <label for="inputVehicleType" >ExpiryDate</label>
                        <input type="text" class="controls form-control"
                         placeholder="ExpiryDate"
                            name = "ExpiryDate" id = "datepicker2" required/>
                    </div>
                  <div class="form-group col">
                    <label for="InputnumberOfSeats" >Vehicle_id</label>
                         <select name = "Vehicle_id" class="form-control search-slt" id="Vehicle_id"  data-dropup-auto="false" required>
										   <option value ="">Id</option>
                                           <?php foreach($VehicleList as $vehicle):?>
										   <option value ="<?=$vehicle->vehicle_id?>"><?=$vehicle->vehicle_id?></option>
										   <?php endforeach ?>
									   </select>
                  </div>
                  

                  <div class="form-group text-centre">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button class="btn btn-primary" id ="Add" data-dismiss="modal">Add Promotion</button>
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
                     <h5 class="card-header bg-success text-white bg-dark border border-bginfo">List of Promotion</h5>
                            <div class="card-body" style="padding-left: 5px;padding-right: 5px;padding-top: 8px;">
							     <div class ="container">
							        <div class ="row">
                                    <table id = "Vehicle" class="table" style = "table-layout: fixed;width: 100%;">
                                        <thead class="thead-dark">
                                                <tr>
                                                <th scope="col">Relase Date</th>
                                                <th scope="col">Expiry Date</th>
                                                <th scope = "col-sm-2">ID</th>
                                                <th scope="col">Vehicle Make</th>
                                                <th scope="col">Vehicle Type</th>
                                                <th scope="col-sm-2">Link</th>
                                                <th scope="col-sm-2">Delete</th>

                                               </tr>
                                        </thead>
                                         <tbody>
                                         <?php foreach ($results as $promotion) : ?>
                                            <tr id = "<?=$promotion->vehicle_id?>">
                                               <td><?=$promotion->promotionDate?></td>
                                               <td><?=$promotion->promotionExpiryDate?></td>
                                               <td><?=$promotion->vehicle_id?></td>
                                               <td><?=$promotion->Make?></td>
                                               <td><?=$promotion->Vehicle_type?></td>
                                               <td><img src=<?=$promotion->Vehicle_link?> height="50" width="50"></td>
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
                </div>
	</body>
</html>