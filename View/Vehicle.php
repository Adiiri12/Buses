<?php include_once "header.php" ?>
<?php require "../Controller/Vehicle.php";?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Berwyn Buses | Vehicle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
	<script src="../View/js/basketControl.js"></script>
</head>
<body>
	

<main class = "main"> 


<!-- Search Form -->

			 
    <div class="container">
       <div class ="row my-4">
		  <div class="col-md-12">
			 <div class="card" style="padding:0;">
                    <h5 class="card-header bg-success text-white bg-dark border border-bginfo">Vehicles</h5>
                       <div class="card-body">
					   <form action="../Controller/Vehicle.php" method="get">
                            <div class="form-row mb-3">
                                <div class="col">
                                 <input type="text" class="form-control" placeholder="Vehicle" name="Vehicle">
                                  </div>
                                   <div class="col">
									 <select name = "price" class="form-control search-slt" id="exampleFormControlSelect1">
										   <option value ="">Price</option>
										   <option value ="15">£15</option>
										   <option value ="20">£20</option>
										   <option value ="30">£30</option>
										   <option value ="40">£40</option>
										   <option value ="50">£50</option>
										   <option value ="60">£60</option>
										   <option value ="70">£70</option>
										   <option value ="80">£80</option>
									   </select>
									</div>
								 <div class="col">
								 <select name = "Passengers" class="form-control search-slt" id="exampleFormControlSelect1">
										   <option value ="">Passengers</option>
										   <option value ="15">15</option>
										   <option value ="20">20</option>
										   <option value ="30">30</option>
										   <option value ="40">40</option>
										   <option value ="50">50</option>
										   <option value ="60">60</option>
										   <option value ="70">70</option>
										   <option value ="80">80</option>
									   </select>
                                 </div>
							</div>
								 <div class="form-row mb-3 ">
										<button type ="submit" name ="search" class= "btn btn-danger wrn-btn" name = "Search">Search</button>
								</div>
                      </form>
                </div>
            </div>
		</div>
	</div>
<!-- Search Form -->



			 <div class="row my-4">
				<div class="col-md-12">
				  <div class="card" style="padding:0;">
                     <h5 class="card-header bg-success text-white bg-dark border border-bginfo">List Of Vehicles</h5>
                            <div class="card-body">
							     <div class ="container">
							        <div class ="row">
								         <?php foreach ($results as $vehicle):?>
														<div class="card-deck col" style ="padding-right:15px;padding-left:15px;">
                                                            <div class="card mb-5" style="width:240px;">
										                         <div class="card-header">
																 <?=$vehicle->vehicleMake?>
										                        </div>
                                                                    <img class="card-img-top" style="height:180px" src="<?=$vehicle->links?>" alt="Card image cap">
										                                    <ul class="list-group list-group-flush" style=" list-style-type: none;">
                                                                               <li class="list-group-item">NumberOfSeats: <?=$vehicle->numberOfSeats?></li>
                                                                               <li class="list-group-item">Price: £<?=$vehicle->hourlyPrice?></li>
													                          <li><button type="submit" onclick="addToBasket(<?=$vehicle->id?>)" class="btn btn-primary" id="buttonForVehicle">Add to Basket</button></li>
                                                                         </ul>
                                                            </div>
														</div>

										                 <?php endforeach ?>     
						               
							         </div>
				                 </div>
				              </div>
							</div>
					 </div>
		         </div>
			</div>

         
</main>

<?php include_once"footer.php" ?>

</body>
</html>