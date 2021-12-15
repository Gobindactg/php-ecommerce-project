<?php


$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error()); 
}
if(isset($_REQUEST['id'])){

 $get_id = $_REQUEST['id'];

 $get_info = "SELECT * FROM blog_table WHERE blog_id = $get_id";

 $update_info = mysqli_query($connection,$get_info);

 while( $row= mysqli_fetch_assoc($update_info)){
    
    ?>

        <div class="content">
                <form action="" method="post">
                    <div class="blog_title">
                        <h2>Blogs Titles</h2><br>
                        <input  type="text" name="headding" value="<?php echo $row['title']?>"><br>
                    </div>
                    <div class="blog_body">
                        <h3>Blog Description</h3><br>
                        
                        <textarea type="text" name="body" rows="3" cols="32" value="<?php echo $row['body']?>"> </textarea><br>
                    </div>
                    <div>
                        <input type="file" name="image" value="upload"><br><br>
                    </div>
                    <div class="blog_user">
                         <h3>Blog user</h3><br>
                         <input type="text" name="user" value="<?php echo $row['user']?>">
                    </div>
                    <div class="blog_submit">
                    <input type="submit" name="blog_submit" value="Submit">
                    </div>
                </form>
                                                                                                                                      
                  
        </div>
</div>






<?php


 }

}



?>
