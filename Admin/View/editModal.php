<!-- Edit -->
<script>
$(document).ready(function(){
  $("edit_<?=$vehicle->vehicle_id?>").click(function(){
    $("edit_<?=$vehicle->vehicle_id?>").modal();
  });
});
</script>
<div class="modal fade" id="edit_<?=$vehicle->vehicle_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <center><h4 class="modal-title" id="myModalLabel">Updated Vehicle</h4></center>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
	<form method="POST" action="../Controller/update.php?id=<?=$vehicle->vehicle_id?>">
			<div class="form-group">
                    <label  class="col control-label"
                              for="InputvehicleName">vehicleName</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" 
                        id="InputvehicleName" value = "<?=$vehicle->vehicleMake?>"
                        name = "Make" requried/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col control-label"
                          for="inputVehicleType" >VehicleModel</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="inputVehicleType" value = "<?=$vehicle->vehicleType?>"
                            name = "Type" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col control-label"
                          for="InputnumberOfSeats" >NumberOfSeats</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control"
                            id="InputnumberOfSeats" value = "<?=$vehicle->numberOfSeats?>"
                            name = "Seats" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col control-label"
                          for="InputlicenceRequried">LicenceRequried</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="InputlicenceRequried" value = "<?=$vehicle->licenceRequried?>"
                            name = "Requried" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col control-label"
                          for="InputhourlyPrice">HourlyPrice</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control"
                            id="InputhourlyPrice" value = "<?=$vehicle->hourlyPrice?>"
                            name="Price" required/>
                    </div>
                  </div><div class="form-group">
                    <label class="col control-label"
                          for="Inputlinks">Imagelinks</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"
                            id="Inputlinks"  value = "<?=$vehicle->links?>"
                            name= "Link" required/>
                    </div>
                  </div>
                  <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
</form>
      </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                
            </div>

        </div>
    </div>
</div>
<!-- Edit -->
