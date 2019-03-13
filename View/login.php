<?php include_once "header.php"?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="../View/styles/styles.css" class="stylesheet">
     <title>Berwyn Buses</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="../View/js/login.js"></script>
 </head>
 <body>
  <div class="container">
  <h2>Login</h2>

  <form method="post" action="../Controller/account.php">
    <div class="imgcontainer">
        <img src="../View/assets/user.jpg" height="200" alt="User" class="avatar">
    </div>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="password" required>
        
    <button type="submit" onclick="validate()">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<?php include_once"footer.php" ?>
 
 </body>
 </html>