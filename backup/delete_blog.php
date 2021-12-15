<?php


$connection = mysqli_connect('localhost','root','','user_info');
if(!$connection){
die("Not connected". mysqli_error()); 
    }

 $delete = $_REQUEST['id'];
 

$query ="DELETE FROM blog_table WHERE blog_id = $delete";

$run_delete_query = mysqli_query($connection, $query);

if($run_delete_query){
    header("location: user_display_blog.php?Data_deleted");
    
}



?>