<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My blog</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
    <style>
        #first{
            background-color: aqua;
            color:white;
            padding: 20px;     
         }
       
    
    </style>
</head>
<body>
 
  <div class="container-fluid">
  <?php  "conn.php" ?>
   <div class="row" id="first">
       <div class="col-md-8"><h2>My Blog</h2></div>
       <div class="col-md-8"></div>          
   </div>
   <br>
    <h2>Login Here</h2>
    <br>
     <div id="info" >
         
     <form method="post" action="login.php">
           <label>Username: </label>
         <input type="text" placeholder="Please enter username"name="name">
      <br><br>
           <label>Password: </label>
         <input type="password" placeholder="Please enter password" name="pass">
         <br>
         <button style="background-color:blue; color:white"type="submit"><b>Login</b></button>
         
         
     </form>  
        <br>
         <h2 id="signup">Signup Here</h2> 
          <br>
           <form method="post" action="signup.php">
           <label>Username: </label>
         <input type="text" placeholder="Please enter username" name="name">
      <br><br>
           <label>Password: </label>
         <input type="password" placeholder="Please enter password" name="pass">
         <br>
         <button style="background-color:blue; color:white"type="submit"><b>Sign Up</b></button>
         
         
     </form>   
          
          
          
          
          
          
          
          
          
          
          </div> 
           
               
                   
                           
   </div>
 
</body>
</html>
