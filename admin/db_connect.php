<?php
$connection = mysqli_connect('localhost','root','','user_info');
if(!$connection){
    die("Not connected". mysqli_error()); 
}
?>