 <?php
include "conn.php";
error_reporting(E_ALL & ~E_NOTICE);        
session_start();
if(isset($_SESSIONS["username"])){
    $username=$_SESSIONS["username"];
    
    
if($_POST["submit"]){
    $title=$_POST["title"];
    $subtitle=$_POST["subtitle"];
    $author=$_POST["author"];
    $date=$_POST["date_created"];
    $content=$_POST["content"];
    
    $sql="INSERT INTO members(title,subtitle,author,content,date_created)
    VALUES ('$title','$subtitle','$author','$content','$date')";
    mysqli_query($conn,$sql);
    echo "blog posted";
   
}else{
    echo "<h2>cannot be posted</h2>";
}



}



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Signin Template for Bootstrap</title>

   
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
   
    <form class="form-signin" method="post" action="yes.php">
     
      <h1 class="h3 mb-3 font-weight-normal">Please Enter Post</h1>
     
      <input type="title"  class="form-control" placeholder="Title" name="title" ><br>
      <input type="text"  class="form-control" placeholder="Subtitle" name="subtitle"><br>
      <input type="text"  class="form-control" placeholder="Author" name="author"><br>
      <input type="text"  class="form-control" placeholder="Date created" name="date_created" ><br>
    
     <textarea name="content" class="container-fluid" placeholder="Content"></textarea>
     
      <input type="submit" name="submit" value="Post Blog entry">
      <br><br>
       <p class="lead">
 
       <a href="home.php" class="btn btn-lg btn-secondary">Home Page</a>
       <a href="logout.php" class="btn btn-lg btn-secondary">Logout</a>
    </form>
    
    </body>
    
 
</html>
