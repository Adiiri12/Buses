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
 
 </head>
 <body>
 <div class="container">
       <h1>Sign Up</h1>
       <p>Please fill in this form to create an account.</p>
       <hr>
       <label for="email"><b>Email</b></label>
       <input type="text" placeholder="Enter Email" name="email" required><br>

       <label for="psw"><b>Password</b></label>
       <input type="password" placeholder="Enter Password" name="psw" required><br>

       <label for="psw-repeat"><b>Repeat Password</b></label>
       <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>
      
       <label>
         <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
       </label>

       <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

       <div class="clearfix">
         <button type="button" class="cancelbtn">Cancel</button>
         <button type="submit" class="signupbtn">Sign Up</button>
       </div>
     </div>
<?php include_once"footer.php" ?>
 
 </body>
 </html>