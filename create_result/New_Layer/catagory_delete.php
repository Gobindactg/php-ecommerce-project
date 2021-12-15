<?php


$connection = mysqli_connect('localhost','root','','user_info');
if(!$connection){
die("Not connected". mysqli_error()); 
    }

 $delete = $_REQUEST['catagory_id'];
 
echo $delete;
$query ="DELETE FROM add_catagory WHERE catagory_id = $delete";

$run_delete_query = mysqli_query($connection, $query);

if($run_delete_query){
    header("location: veiw_catagory.php?Data_deleted");
    
}



?>