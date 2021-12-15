<?php
    $connection = mysqli_connect('localhost','root','','user_info');
    if(!$connection){
    die("Database Not connected". mysqli_error()); 
        }
?>