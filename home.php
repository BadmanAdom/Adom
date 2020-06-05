  
  
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog</title>
   
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- optional CDN for Foundation Icons ^^ -->
  </head>
  <body>
   
       
        <div class="callout large primary">
          <div class="text-center">
            <h1>My Posts</h1>
          </div>
        </div>
    
     <?php
    include_once "conn.php";

$sql= "SELECT * FROM members ORDER BY id DESC" ;
    
$result=mysqli_query($conn,$sql);

while($data=mysqli_fetch_array($result)){
    $title=$data["title"];
    $subtitile=$data["subtitle"];
    $content=$data["content"];
    $author=$data["author"];
    $date=$data["date_created"];

  
    ?>
    <article class="container-fluid">
       
        <div class="grid-x grid-margin-x" id="content">
        
            <div class="blog-post" >
             
              <h2><?php echo $title?> </h2>
              
              <p><?php echo $content ?></p>
           
              <div class="callout">
                 <ul class="menu simple">
              
                  <li>Author: <?php echo $author ?></li> 
                  <li>Created On: <?php echo $date ?></li> 
                <hr>

                </ul>
              </div>
            </div>
        </div>
        
    <?php 
}
?>
    <a class="btn btn-primary" href="admin.php" role="button">Add Post</a>  
    </article>
       
      </body>
    </html>
    


    <script src="js/jquery.js"></script>
   
 
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
