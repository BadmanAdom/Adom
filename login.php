  

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
  
    <title>Signin</title>

   
    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">

 
  
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="login.php" method="post">
   <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
 
  <input type="text"  name="username" class="form-control" placeholder="Username" >
 
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" >
  <div class="checkbox mb-3">
  
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value="submit">Sign in</button>
  <p class="mt-5 mb-3 text-muted">&copy; Adom</p>
  
  
  
<?php

error_reporting(E_ALL & ~E_NOTICE);
session_start();


if($_POST["submit"]){
    $dbUser="adom";
    $dbPass="password";
    $username=$_POST["username"];
    $pass=$_POST["password"];
    
    if($username==$dbUser&& $pass==$dbPass){
     $_SESSION["username"]=$username;
        header("Location: tsw.php");
    }else{
   
        echo "<h3>wrong username or password</h3>";
    }
}

  




?>
</form>

</body>
</html>
