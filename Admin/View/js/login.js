$(document).ready(function(){
      $("button#Login").click(function(){
        var user =  $("input[name=User]").val().trim();
        var Password =  $("input[name=Pass]").val().trim();

        if(user != "" && Password != ""){
            
        $.post("../Controller/ajaxLogin.php",{ 
            "user" : $("input[name=User]").val().trim(),
             "password" : $("input[name=Pass]").val().trim()
        },function(result){

            if(result == "true")
            {
                console.log(result);
                window.location = "../View/index.php";
            }
            else
            {
                var html = ``;
                html += ` <div class="alert alert-success">
                 Incorrect Password and Login
                 </div>
                `;
                $("div#Login").html(html);
            }
        });

        }
        else{
            alert("Please fill both boxes");
            return false;
        }

      });

      $("input#UserName").keyup(function(event){

        if(event.keyCode === 13)
        {
  
        $("button#Login").click();
        }
  
       });
       $("input#inputPassword").keyup(function(event){

        if(event.keyCode === 13)
        {
  
        $("button#Login").click();
        }
  
       });
    });