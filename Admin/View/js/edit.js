$(document).ready(function(){
    $("button#update").click(function(){

        var id = $("input[name=id]").val().trim();
        $.post("../Controller/ajaxUpdate.php",{
            "id"  : $("input[name=id]").val().trim(),
            "Make" : $("input[name=Make]").val().trim(),
            "Type" : $("input[name=Type]").val().trim(),
            "Seats" : $("input[name=Seats]").val().trim(),
            "Requried" : $("input[name=Requried]").val().trim(),
            "Price" : $("input[name=Price]").val().trim(),
            "Link" : $("input[name=Link]").val().trim() 
        },function(result){
                
                console.log(result);
                if(result == "true")
                {
                    alert("vehicle "+id+" has been updated");
                    window.location = "../View/Vehicle.php";
                
                }
        });
  });
});