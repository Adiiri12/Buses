<!DOCTYPE html>
<?php
require_once "../Controller/signup.php"
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../View/styles/Style.css" class="stylesheet">
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Admin | Login</title>
</head>
<body>
<div class = "container">
 <div class = "row">
  <div class= "col-sm-9 col-md-7 col-lg-5 mx-auto">
    <div class = "card card-siginin my-5">
     <div class ="card body">
      <h5 class="card-title text-center">Admin sign up</h5>
        <form class="form-signin" method="Post" action ="../Controller/signup.php">
           <div class  = "row" style = "margin-bottom: 10px">
           <input type="text" id="Admin_name" name = "Name" class="form-control" placeholder="Name" required>
           </div>
           <div class  = "row" style = "margin-bottom: 10px">
           <input type="email" id="emailAddress" name = "email" class="form-control" placeholder="emailAddress" required>
           </div>
           <div class  = "row" style = "margin-bottom: 10px">
           <input type="text" id="UserName" name = "User" class="form-control" placeholder="UserName" required>
           </div>
           <div class  = "row" style>
           <input type="password" id="inputPassword" name ="Pass" class="form-control" placeholder="Password" required>
           </div>
           <div class  = "row" style = "margin-bottom: 10px">
           <input type="password" id="Repeat Password" name ="RPass" class="form-control" placeholder=" Repeat Password" required>
           </div>
           <div class  = "row" style = "margin-bottom: 10px">
           <button class="btn btn-lg btn-primary btn-block text-centre" name="LogIn" type="submit">Sign in</button>
           <div>
           <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
       </form>
      </div>
    </div>
   </div>
  </div>
</div>
</body>
</html>