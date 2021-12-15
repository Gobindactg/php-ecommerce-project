  
  
  <?php
  	if(isset($_GET['logout'])){
		require 'admin/function.php';
		user_logout();
	}
            $connection = mysqli_connect('localhost','root','','user_info');
                 if(!$connection){
                 die("Not connected". mysqli_error()); 
                     }
           
            $query = "SELECT * FROM blog_table  WHERE publication_status=1 ORDER BY s_date DESC";
            $result = mysqli_query($connection,$query);
            $count = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)){
                $id = $row['blog_id'];
                $blog_user = $row['blog_user'];
                $title = $row['title'];
                $body = $row['body'];
                $date = $row['s_date'];
                
                $blog_image = $row['blog_image'];
            
 
            ?>
<link rel="stylesheet" href="css/display_blog1.css">
     <div class="blog">
         
       
         <h3 style="color:teal; font-weight: 600; "> <?php echo $title; ?></h3>
         <p > Posted by : <span style="color:green; font-family: tahoma; font-style: italic; font-size:20px;"> <?php echo $blog_user?></span>   || <span>submited time: <?php echo $date; ?></span>  </p>
        <div class="blog_body">
         <p><img height="100px" width="auto" src="images/<?php echo $blog_image?>" alt=""></p>
         <p style="color:black; font-weight: 400; text-align:justify;"><?php echo $body; ?><a href="">read more</a></p>
         <div class="blog_button">
          
         </div>
         <hr><hr>
         </div>
    </div>
    <?php
            }
    ?>