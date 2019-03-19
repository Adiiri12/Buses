<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../View/styles/styling.css" class="stylesheet">
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Admin | Login</title>
</head>
<body class="text-center">
    <form class="form-signin" method="Post" action ="../Controller/Login.php">
    <? php: if($message != " ") : ?>
     
     <span style = "Colour "
      <h1 class="h3 mb-3 font-weight-normal">Admin Sign In</h1>
      <label for="UserName" class="sr-only">username</label>
      <input type="text" id="UserName" name = "User" class="form-control" placeholder="UserName" required >
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name ="Pass" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" name="LogIn" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>



  
