$(document).ready(function(){
    $("button#Adds").click(function(e){
        
        //e.preventDefault();

      var make = $("input[name=vehicleMake]").val().trim();

      var makes = "";
        

      
        $.post("../Controller/ajaxAddVehicle.php",{ 
            "makes" : $("input[name=vehicleMake]").val().trim(),
            "types" : $("input[name=vehicleType]").val().trim(),
            "seats" : $("input[name=numberOfSeats]").val().trim(),
            "licence" : $("input[name=licenceRequried]").val().trim(),
            "cost" : $("input[name=hourlyPrice]").val().trim(),
            "link" : $("input[name=links]").val().trim()
            },function(result){

            console.log(result);
            if(result == "true")
            {
                alert(make+" has been added");

                $.get("../Controller/ajaxVehicle.php?Make="+makes,function(result){

                    console.log(result);

                  
                    $("table#Vehicle").empty()

                    var table = ``;

                    table+= ` <thead class="thead-dark">
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
                   `;

                   for (var i = 0; i<result.length; i++)
                   {
                       var vehicle = result[i];

                       table += `<tr>
                       <td>`+vehicle.vehicleMake+`</td>
                       <td>`+vehicle.numberOfSeats+`</td>
                       <td>`+vehicle.vehicleType+`</td>
                       <td>`+vehicle.licenceRequried+`</td>
                       <td>`+vehicle.hourlyPrice+`</td>
                       <td><img src=`+vehicle.links+ `height="50" width="50"></td>
                       <td >
                       <a href="edit.php?id=`+vehicle.vehicle_id+` class="btn btn-success btn-sm" ><span class="glyphicon glyphicon-edit"></span> Edit</a>
                       </td>
                      <td>
                      <a onclick="return confirm('Are you sure you want to delete this entry?`+vehicle.vehicle_id+`)" href="../Controller/delete.php?delete=<?=$vehicle->vehicle_id?>" class='btn btn-danger btn-sm'>Delete</a>
                      </td>
                  </tr>    
                      <?php include "../View/editModal.php"; ?>
                 </tbody>`;


                   }

                   $("table#Vehicle").html(table);
                });


            }



        });

    });
});