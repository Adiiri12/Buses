<?php include_once "header.php" ?>
<?php require_once "../Controller/Vehicle.php"?>
<?php require_once "../Controller/basket.php"?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script type = "text/javascript" src = "..\js\main.js"></script>
  <title>Berwyn Buses | Vehicle</title>
</head>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Berwyn Buses | Vehicle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

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
							  <div class = "col">
							    <input disabled id="date" data-provide="datapicker" class ="form-control" placeholder="Avaliabilty">
								</div>
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
								 <div class ="col">
								   <select name ="licenceRequried" class ="form-control search-slt" id="exampleFormControlSelect1">
								           <option value ="">LicenceRequried</option>
										   <option value ="D1">MiniBus(D1)</option>
										   <option value ="D">Bus(D)</option>
								    </select>
								</div>
							</div>
									
								 <div class="form-row mb-3 ">
								   <div class = "col-sm-2">
										<button type ="submit" name ="search" class= "btn btn-danger wrn-btn" name = "Search">Search</button>
								</div>
							</div>
							</form>
							<div class="form-row mb-3">
							<div class = "col">
							<input disabled id="date" data-provide="datapicker" class ="form-control" placeholder="Avaliabilty">
              </div>
							<div class="col">
                  <input type="text" class="form-control" placeholder="Vehicle" name="Make" id = "make"/>
                </div>
								<div class="col">
									 <select name ="Cost" class="form-control search-slt" id="exampleFormControlSelect1">
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
								 <select name = "Pass" class="form-control search-slt" id="exampleFormControlSelect1">
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
								   <select name ="licence" class ="form-control search-slt" id="exampleFormControlSelect1">
								           <option value ="">LicenceRequried</option>
										   <option value ="D1">MiniBus(D1)</option>
										   <option value ="D">Bus(D)</option>
								    </select>
								</div>
								</div>
								<div  class = "form-row ">
								<div class = "col-sm-2">
								  <button type = "submit" id = "ajaxsearchButton" class = "btn btn-success btn-md">Search</button>
								</div>
								</div>
                </div>
            </div>
		</div>
	</div>
<!-- Search Form -->


<div class="row my-4" >
  <div class="col-md-12">
		<div class="card" style="padding:0;" >
       <h5 class="card-header bg-success text-white bg-dark border border-bginfo">List Of Vehicles</h5>
          <div class="card-body" id = "cardAjax">
					  <div class ="container">
							 <div class ="row">
							 <?php foreach ($results as $vehicle):?>
										<div class="card-deck col"  style ="padding-right:15px;padding-left:15px;">
                      <div class="card mb-5" style="width:240px;">
												<div class="card-header">
												<?=$vehicle->vehicleMake?>
										    </div>
                        <img class="card-img-top" style="height:180px" src="<?=$vehicle->links?>" alt="Card image cap">
										    <ul class="list-group list-group-flush" style=" list-style-type: none;">
                          <li class="list-group-item" name="nos">NumberOfSeats: <?=$vehicle->numberOfSeats?></li>
                          <li class="list-group-item">Price: £<?=$vehicle->hourlyPrice?></li>
													<form action="../Controller/basket.php" method="post">
														<li>																									
															<input value=<?=$vehicle->vehicle_id?> type="hidden" name="transferedId">
															<input value="Add To Basket" type="submit" class="btn btn-primary" name="submit" style="width:100%;">
														</li> 
													</form>
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