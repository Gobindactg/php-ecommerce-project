<?php
$connection = mysqli_connect('localhost','root','','user_info');
if(!$connection){
    die("Not connected". mysqli_error()); 
}

$query = "SELECT roll, student_name, age, father_name, other_name FROM student_info INNER JOIN gudian_info USING roll";


$result = mysqli_query($connection,$query);
echo $result;


?>
