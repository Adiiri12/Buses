<?php include_once "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <title>Berwyn Buses | Home</title>
</head>
<body>
			 



  
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
								 <div class ="col">
								   <select name ="licenceRequried" class ="form-control search-slt" id="exampleFormControlSelect1">
								           <option value ="">LicenceRequried</option>
										   <option value ="D1">MiniBus(D1)</option>
										   <option value ="D">Bus(D)</option>
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



<!-- CAROUSEL!!-->
<div class="bd-example">
<h2 style="text-align:center;">Promotions!</h2>  
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./assets/myBigBus.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Bus Number 1</h5>
          <p>50% off! Expires 03/07/19</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./assets/myBigBus.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Bus Number 2</h5>
          <p>50% off! Expires 03/07/19</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./assets/myBigBus.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Bus Number 3</h5>
          <p>50% off! Expires 03/07/19</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- CAROUSEL END!!-->
</body>
<a href= "http://uniqurate.kingston.ac.uk/jira/secure/RapidBoard.jspa?rapidView=58&view=planning&selectedIssue=A3BUS-17&versions=visible&epics=visible">Link to Jira page</p></a>
</html>

<?php include_once "footer.php" ?>