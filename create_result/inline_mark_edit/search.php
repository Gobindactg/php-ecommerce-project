<?php

$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error()); 
}



if(isset($_REQUEST['search'])){

    $recv_name = $_REQUEST['search_name'];

    $query  = "SELECT * FROM login_table WHERE user_name LIKE '%$recv_name%'"; 

    $result = mysqli_query($connection,$query);
}


?>