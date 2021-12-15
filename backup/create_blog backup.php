<?php
   session_start();
  
   $user_id = $_SESSION['user_id'];
   if($user_id == NULL){
       header('location: index.php');
   }

           
            if(isset($_POST['blog_submit'])){
                $blog_user = echo $_SESSION['user_name'];
                $title = $_POST['headding'];
                $body = $_POST['body'];
                $user = $_POST['user'];
                $rec_file = $_FILES['upload_image'];
                $image_name = $rec_file['name'];
                $image_tmp_name = $rec_file['tmp_name'];
                if(!empty($image_name)){

                    $loc = "images/";
                    if(move_uploaded_file($image_tmp_name, $loc.$image_name)){
                     // header("location: blog.php");
                    }else{
                      echo " Your File is empty";
                    }
      
              }
          
              
              
            $connection = mysqli_connect('localhost','root','','user_info');
            if(!$connection){
                die("Not connected". mysqli_error()); 
            }

            
            $query = "INSERT INTO blog_table (blog_user, title, body, user, blog_image) VALUES ($blog_user '$title', '$body', '$user', '$image_name')";
            $result = mysqli_query($connection,$query);
            
            if($result){
                echo "Data Insert Successfully";
                //header("location: create_blog.php?success");
                }else{
                  echo "Data Insert Is Not Successfully";  
                }
            }
            
            
                       
            
            ?>
            <link rel="stylesheet" href="css/blog.css">
            <div class="content">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="blog_title">
                        <h2>Blogs Titles</h2><br>
                        <input  type="text" name="headding" placeholder="Write Your blogs titles"><br>
                    </div>
                    <div class="blog_body">
                        <h3>Blog Description</h3><br>
                        <textarea type="text" name="body" rows="3" cols="32" placeholder="Write Your blogs descriptions"></textarea><br>
                    </div>
                    <div>
                        <input type="file" id="image" name="upload_image" value="upload" accept="image/*" onchange="loadFile(event)"><br><br>
                    </div>
                    <div> <img  id="output" src="" alt="" style="height:200px; width:200px; border: 1px solid black;"></div>
                    <div class="blog_user">
                         <h3>Blog user</h3><br>
                         <input type="text" name="user" placeholder=" Write your name">
                    </div>

                    <div class="blog_submit">
                    <input type="submit" name="blog_submit" value="Submit">
                    </div>
                </form>

                <script type="text/javascript">
                     var loadFile = function(event) {
                     var output = document.getElementById('output');
                     output.src = URL.createObjectURL(event.target.files[0]);
                    output.onload = function() {
                    URL.revokeObjectURL(output.src) 
                        }
                      };
                </script>
           </div>
    </div>
    