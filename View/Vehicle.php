<?php include_once"header.php" ?>
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

				<div class="container">
						<div id="searchFormContainer" class="col-lg-12 col- p-4 bg-success text-white bg-dark border border-bginfo rounded shadow shadow-lg">
						<h1 class="display-6">Search for vehicle</h1>
					   <form action="../Controller/controller.php" method="post" >
								<div class="row">
								   <div class="form-group col-lg 4 col-md-2 col-sm-6">
									   <input type="text" class="form-control search-slt" placeholder="Pickup">
								   </div>
								   <div class="form-group col-lg 4 col-sm-6">
									   <input type="text" class="form-control search-slt" placeholder="Drop-Off">
								   </div>
								   <div class="form-group col-lg 4 col-sm-6">
									   <select class="form-control search-slt" id="exampleFormControlSelect1">
										   <option value ="vehicle">Vehicles</option>

										   <option value => Example one</option>
										   <option>Example one</option>
										   <option>Example one</option>
										   <option>Example one</option>
										   <option>Example one</option>
										   <option>Example one</option>
									   </select>
								   </div>
								   <div class="form-group col-lg 4 col-sm-6">
									   <select class="form-control search-slt" id="exampleFormControlSelect1">
										   <option>Price</option>
										   <option>£60</option>
										   <option>£70</option>
										   <option>£80</option>
										   <option>£90</option>
										   <option>£100</option>
										   <option>£110</option>
										   <option>£120</option>
									   </select>
									</div>
									<div class="form-group col-lg 4 col-sm-6">
											<input type="text" class="form-control search-slt" placeholder="No Of Passengers">
										</div>
									   <div class="form-group col-lg 4 col-sm-6">
											<select class="form-control search-slt" id="exampleFormControlSelect1">
												<option value>Driving licence</option>
												<option>B1</option>
												<option>D1</option>
											</select>
										</div>
									</div>
										<div class="form-group col-md-2 col-sm-6">
										<button type="button" class="btn btn-danger wrn-btn">Search</button>
									</div>
								</div>
							   </div>
							   </div>
							</div>
						</div>
					 </form>
	<!-- SearchForm-->
		
	<div class="container">
	 <div class="jumbtron">
	    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
			<thead>
			  <tr>
				<th class="th-sm">Vehicle
				</th>
				<th class="th-sm">Vehicle Model
				</th>
				<th class="th-sm">Price
				</th>
				<th class="th-sm">Licence Type
				</th>
				<th class="th-sm">Availability
				</th>
			  </tr>
			</thead>

            <tr>
                <td>Dummy Data</td>
                <td>Dummy Data</td>
                <td>Dummy Data</td>
				<td>Dummy Data</td>
				<td>Dummy Data</td>
            </tr>
        </tbody>
	</table>
</div>
</div>
	

</main>
	
	
	
<footer>
	<!-- Copyright -->
	<div class="footer-copyright text-center py-3">© 2018 Copyright:
		<a href="#"> Kingston.Sugery</a>
	</div>
	<!-- Copyright -->

</footer>
<!-- Footer -->






	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>