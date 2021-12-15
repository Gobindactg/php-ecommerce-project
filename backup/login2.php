<?php

$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error()); 
}

$query = "SELECT * FROM login_table";

$result = mysqli_query($connection,$query);


if(isset($_POST['submit6'])){     
    
    $userEmail = $_POST['log_email'];
    $userPass = $_POST['log_password'];
    
    

while ($row = mysqli_fetch_assoc($result)){
           
            $name = $row['user_email'];
           
            $password = $row['user_pass'];
          
     
?>
<?php
 if($userEmail== echo $name && $userPass== echo $password){
    header("location: display.php?success");
}else{
    header("location: full_login.php");
}
  ?>