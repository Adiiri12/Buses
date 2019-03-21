<?php require_once "../Controller/promotions.php"?>
<?php include_once "../View/header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
		<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css">
		<script type = "text/javascript" src = "../View/js/main.js"></script>
  <title>Berwyn Buses | Home</title>
</head>
<body>
<br>			 

<h1 class="d-flex justify-content-center">Welcome to Berwyn Buses</h1>
<h3 class="d-flex justify-content-center">Use the search form below to look for your ideal vehicle, or browse current promotions and the newest vehicles!</h3>

<br>


  
<!-- Search Form -->

			 
<div class="container">
       <div class ="row my-4">
		  <div class="col">
			 <div class="card" style="padding:0;">
                    <h5 class="card-header bg-success text-white bg-dark border border-bginfo">Vehicles</h5>
                       <div class="card-body">
											 <form action="../Controller/Vehicle.php" method="get">
                            <div class="form-row mb-3">
							  <div class = "col">
							    <input type="text" class="controls form-control" placeholder="Date" name = "ReleaseDate" id ="datepicker1"required />
								</div>
								<div class = "col">
								<input type="text" class="controls form-control" placeholder="Date" name = "ExpiryDate" id = "datepicker2" required/>
								</div>
								
                                <div class="col">
                                 <input type="text" class="form-control" placeholder="Vehicle" name="Vehicle" >
                                  </div>
                                   <div class="col">
									 <select name = "price" class="form-control search-slt" id="exampleFormControlSelect1" >
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
								 <select name = "Passengers" class="form-control search-slt" id="exampleFormControlSelect1" >
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
								 <div class ="col">
								   <select name ="licenceRequried" class ="form-control search-slt" id="exampleFormControlSelect1" >
								           <option value ="">LicenceRequried</option>
										   <option value ="D1">MiniBus(D1)</option>
										   <option value ="D">Bus(D)</option>
								    </select>
								</div>
							</div>
									
								 <div class="form-row mb-3 ">
								   <div class = "col-sm-2">
										<button type ="submit" name ="search" class= "btn btn-primary wrn-btn" name = "Search">Search</button>
								</div>
							</div>
							</form>
                </div>
            </div>
		</div>
	</div>
  </div>
<!-- Search Form -->



<!-- Promotions-->

<div class="container">
<div class="row my-4" >
  <div class="col">
		<div class="card" style="padding:0;" >
       <h5 class="card-header bg-success text-white bg-dark border border-bginfo">new promotions.</h5>
          <div class="card-body" id = "cardAjax">
					  <div class ="container">
							 <div class ="row">
               <?php for($i = sizeof($promotion)-1; $i> sizeof($promotion)-4; $i-- ): ?>
										<div class="card-deck col"  style ="padding-right:15px;padding-left:15px;">
                      <div class="card mb-5" style="width:240px;">
												<div class="card-header">
													<?=$promotion[$i]->Make?>
										    </div>
                        <img class="card-img-top" style="height:180px" src="<?=$promotion[$i]->Vehicle_link?>" alt="Card image cap">
										    <ul class="list-group list-group-flush" style=" list-style-type: none;">
                        <li class="list-group-item">Date <?=$promotion[$i]->promotionDate?></li>
                        <li class="list-group-item">ExpiryDate <?=$promotion[$i]->promotionExpiryDate?></li>
                          <li class="list-group-item">Model <?=$promotion[$i]->Vehicle_type?></li>
													<form action="../Controller/basket.php" method="post">
														<li>																									
															<input value=<?=$promotion[$i]->vehicle_id?> type="hidden" name="transferedId">
															<input value="Add To Basket" type="submit" class="btn btn-primary" name="addVehicleToBasket" style="width:100%;">
														</li> 
													</form>
                        </ul>
                       </div>
											</div>
                      <?php endfor ?> 
                      </div>
				        </div>
				     </div>
				  </div>
		  </div>
   </div>
</div>
</div> 


<!-- New Vehicles-->
<div class="container">
<div class="row my-4" >
  <div class="col">
		<div class="card" style="padding:0;" >
       <h5 class="card-header bg-success text-white bg-dark border border-bginfo">New vehicles added recently...</h5>
          <div class="card-body" id = "cardAjax">
					  <div class ="container">
							 <div class ="row">
							 <?php if(sizeof($results)>0) ?>
               <?php for($i = sizeof($results)-1; $i> sizeof($results)-4; $i-- ): ?>
										<div class="card-deck col"  style ="padding-right:15px;padding-left:15px;">
                      <div class="card mb-5" style="width:240px;">
												<div class="card-header">
													<?=$results[$i]->vehicleMake?>
										    </div>
                        <img class="card-img-top" style="height:180px" src="<?=$results[$i]->links?>" alt="Card image cap">
										    <ul class="list-group list-group-flush" style=" list-style-type: none;">
                          <li class="list-group-item" name="nos">NumberOfSeats: <?=$results[$i]->numberOfSeats?></li>
                          <li class="list-group-item">Price: £<?=$results[$i]->hourlyPrice?></li>
													<form action="../Controller/basket.php" method="post">
														<li>																									
															<input value=<?=$results[$i]->vehicle_id?> type="hidden" name="transferedId">
															<input value="Add To Basket" type="submit" class="btn btn-primary" name="addVehicleToBasket" style="width:100%;">
														</li> 
													</form>
                        </ul>
                       </div>
											</div>
                      <?php endfor ?>             
							    </div>
				        </div>
				     </div>
				  </div>
		  </div>
   </div>
</div>
</div>





<!-- CAROUSEL END!!-->
</body>
</html>

<?php include_once "footer.php" ?>