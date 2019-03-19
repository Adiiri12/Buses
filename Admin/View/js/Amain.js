$(document).ready(function(){
    $("button#Adds").click(function(){
        
        //e.preventDefault();
        //$('#addVehicle').modal('hide');



      var make =  $("input[name=vehicleMake]").val().trim();
      var types =  $("input[name=vehicleType]").val().trim();
      var seats = $("input[name=numberOfSeats]").val().trim();
      var licence = $("input[name=licenceRequried]").val().trim();
      var cost = $("input[name=hourlyPrice]").val().trim();
      var link =  $("input[name=links]").val().trim();

      var makes = "";
        
    if(make != '' && types != '' && seats != '' && licence != '' && cost != '' && link != ''){
      
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

                    //console.log(result);

                  
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

                       table += `<tr id = "`+vehicle.vehicle_id+`">
                       <td>`+vehicle.vehicleMake+`</td>
                       <td>`+vehicle.numberOfSeats+`</td>
                       <td>`+vehicle.vehicleType+`</td>
                       <td>`+vehicle.licenceRequried+`</td>
                       <td>`+vehicle.hourlyPrice+`</td>
                       <td><img src="`+vehicle.links+ `"height="50" width="50"></td>
                       <td>
                       <a href="edit.php?id=`+vehicle.vehicle_id+`"x class="btn btn-success btn-sm" ><span class="glyphicon glyphicon-edit"></span> Edit</a>
                       </td>
                      <td>
                      <button id = "delete" class='btn btn-danger btn-sm'>Delete</button>
                      </td>
                     </tr>   
                     </tbody>`;
                   }
                    $("table#Vehicle").html(table);
                });

               
            }

            //$('#addVehicle').modal('hide');


        });
    }

     else
     {
         alert("fill in the form");
         return false;
     }

    });

    $("body").on("click", "button#delete", function(){

    var id = $(this).parents("tr").attr("id");
    console.log(id);
    //var makes = $("")

        if(confirm('Are you sure to remove this vehicle ')){
            $.get("../Controller/ajaxDelete.php?id="+id,function(result)
            {
                $("#"+id).remove();
                //alert("Record removed successfully");  
            });

       }
    
   });

   
});