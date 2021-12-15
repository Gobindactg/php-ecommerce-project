<?php


$connection = mysqli_connect('localhost','root','','user_info');
if(!$connection){
die("Not connected". mysqli_error()); 
    }

 $delete = $_REQUEST['mark_id'];
 
echo $delete;
$query ="DELETE FROM mark_table WHERE mark_id = $delete";

$run_delete_query = mysqli_query($connection, $query);

if($run_delete_query){
    header("location: mark_show.php?Data_deleted");
    
}



?>