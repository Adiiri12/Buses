<?php include_once"header.php" ?>
<?php require "../Controller/Vehicle.php";?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Index Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
	<link rel="stylesheet" href="style.css">
</head>
<body>
	

<main class = "main">
             <!-- Search Form -->

				<div class="container" style ="padding-bottom:15px;">
						<div id="searchFormContainer" class="col-lg-12 col- p-4 bg-success text-white bg-dark border border-bginfo">
						<h1 class="display-6">Search for vehicle</h1>
					   <form action="../Controller/Vehicle.php" method="get" >
								<div class="row">
								   <div class="form-group col-lg 4 col-sm-6">
									   <input type="search" class="form-control search-slt" name="price" placeholder="Price">
								   </div>
								   <div class="form-group col-md-2 col-sm-6">
										<button type ="submit" name ="search" class= "btn btn-danger wrn-btn">Search</button>
									</div>
						</form>
						</div>
					</div>
				</div>
	
    <div class="container">
	 <div class="jumbtron">
		 <div class="border-box">
	    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
			<thead>
			  <tr>
				<th class="th-sm">Vehicle
				</th>
				<th class="th-sm">Number of Passengers
				</th>
				<th class="th-sm">CPC Required
				</th>
				<th class="th-sm">PCV Required
				</th>
				<th class="th-sm">Price
				</th>
			  </tr>
			</thead>
			<?php foreach ($results as $vehicle):
			//SEPERATE CONCERNS
			$cpcx = "";
			 $cpc =	$vehicle->CPCRequired;
			 if($cpc == 1) {
					$cpcx = "Yes";
			 }
			 else {
				 $cpcx = "No";
			 }
				?>
            <tr>
                <td><?=$vehicle->vehicleName?></td>
                <td><?=$vehicle->numberOfPassengers?></td>
                <td><?=$cpcx?></td>
                <td><?=$vehicle->PCVRequired?></td>
                <td><?=$vehicle->price?></td>
            </tr>
        <?php endforeach ?>     
        </tbody>
	</table>
</div>
</div>
	

</main>

<?php include_once"footer.php" ?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>