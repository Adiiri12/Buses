$(document).ready(function(){
    $("button#Add").click(function(){
      
        var Edate =  $("input[name=ExpiryDate]").val().trim();
        var date =   $("input[name=ReleaseDate]").val().trim();
        var Id = $("select[name=Vehicle_id]").val().trim();

        var ID = "";

        if(Edate != "" && date != "" && Id !=""){

            $.post("../Controller/ajaxAddPromotion.php",{
    
                "Edate" :  $("input[name=ExpiryDate]").val().trim(),
                "date" :   $("input[name=ReleaseDate]").val().trim(),
                "id" :    $("select[name=Vehicle_id]").val().trim(),
            },function(result){

                console.log(result);
            if(result == "true")
            {

                $.get("../Controller/ajaxPromotion.php?id="+ID,function(result){

                    //console.log(result);

                  
                    $("table#Vehicle").empty()

                    var table = ``;

                    table+= ` <thead class="thead-dark">
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
                   `;

                   for (var i = 0; i<result.length; i++)
                   {
                       console.log(result);
                       var promotion = result[i];

                       table += `<tr id = "`+promotion.vehicle_id+`">
                       <td>`+promotion.promotionDate+`</td>
                       <td>`+promotion.promotionExpiryDate+`</td>
                       <td>`+promotion.vehicle_id+`</td>
                       <td>`+promotion.Make+`</td>
                       <td>`+promotion.Vehicle_type+`</td>
                       <td><img src="`+promotion.Vehicle_link+ `"height="50" width="50"></td>
                      <td>
                      <button id = "delete" class='btn btn-danger btn-sm'>Delete</button>
                      </td>
                     </tr>   
                     </tbody>`;
                   }
                     
                    $("table#Vehicle").html(table);
                });

               //alert("Promotion has been added");
            }

            alert("Promotion has been added");
            });

    
            
        }


    });

    $('#datepicker1').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'yyyy-mm-dd',
        minDate : new Date(),
        maxDate : function(){
          return $("#datepicker2").val();
        }



    });
    $('#datepicker2').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'yyyy-mm-dd',
        minDate : function(){
            return $("#datepicker1").val();
        }

    });

    $("body").on("click", "button#delete", function(){

        var id = $(this).parents("tr").attr("id");
        console.log(id);
        //var makes = $("")
    
            if(confirm('Are you sure to remove this vehicle ')){
                $.get("../Controller/ajaxDelete.php?Id="+id,function(result)
                {
                    $("#"+id).remove();
                    //alert("Record removed successfully");  
                });
    
           }
    });
    
});