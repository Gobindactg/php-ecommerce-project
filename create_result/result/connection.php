
<?php $connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error()); 
}
$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error()); 
}

$query = "SELECT * FROM mark_table";


?>