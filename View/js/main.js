$(document).ready(function(){

    $("button#ajaxsearchButton").click(function(){

       var make = $("input[name=Make]").val().trim();
       var price = $("select[name=Cost]").val();
       var Pass = $("select[name=Pass]").val();
       var licence = $("select[name=licence]").val();
       var rdate = $("input[name=RDate]").val().trim();
       var edate = $("input[name=EDate]").val().trim();

       if(rdate == '' && edate != ''  || edate == '' && rdate != '' )
       {
         alert("both Dates must be filled in");
         return;
       }
       else{
        $.get("../Controller/Ajax.php?Make="+make+"&Cost="+price+"&Pass="+Pass+"&Licence="+licence+"&Date="+rdate+"&EDate="+edate,function(results){

          $("div#cardAjax").empty();
        
           var newcard = "";
            
           newcard += 
            `  
							     <div class ="container-fluid">
                      <div class ="row"> `;
                      

                      var newrow = "";
                    
            

            for (var i = 0 ; i < results.length; i++)

            {
                var vehicle = results[i];
                //console.log(results[i]);
 

                newcard += `
                <div class="card-deck col-lg-4 ml-1 "  style ="padding-right:15px;padding-left:15px;">
                <div class = 'card mb-5' style = 'width:240px;'>
                               <div class = 'card-header'>
                               `+vehicle.vehicleMake+ `
                               </div> 
                  <img class = 'card-img-top' style = 'height:180px' src = "`+vehicle.links+ `" alt = 'Card image cap' > 
                     <ul class='list-group list-group-flush' style=' list-style-type: none;'>
                      <li class='list-group-item' name='nos'>NumberOfSeats: `+vehicle.numberOfSeats+ `</li>
                      <li class='list-group-item'>Price: £ `+vehicle.hourlyPrice+ `</li>
                       <form action='../Controller/basket.php' method='post'>
                     </li>
                 <input value=" `+vehicle.vehicleMake+ `" type='hidden' name='make'>
                      <input value= ` +vehicle.hourlyPrice+ ` type='hidden' name='price'>
                      <input value= `+vehicle.links+ `  type='hidden' name='links'>
               <input value='Add To Basket' type='submit' class='btn btn-primary' name='submit' style='width:100%;'>
                 </li>
               </form>
               </ul>
              </div>
                </div>
              
              
              
              
              
            
      
              
                `;

                $("div#cardAjax").html(newcard);
               
                

                //var newrow = $("<tr></tr>")




            }
          
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
  
  
  



     $("input#Make").keyup(function(event){

      if(event.keyCode === 13)
      {

      $("button#ajaxsearchButton").click();
      }

     });

   
});