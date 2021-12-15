
<?php
   if(isset($_POST['submit'])){
    $st_name = $_POST['st_name'];
    $st_age= $_POST['st_age'];
    $roll = $_POST['roll'];

$connection = mysqli_connect('localhost','root','','user_info');
if(!$connection){
    die("Not connected". mysqli_error()); 
}

$query = "INSERT INTO student_info ( roll, student_name, age) VALUES ('$roll', $st_name', '$st_age')";
$result = mysqli_query($connection,$query);

if($result){
    echo "Data Insert Successfully";
    header("location: student_info.php?success");
    }else{
      echo "Data Insert Is Not Successfully";  
    }
}


?>
<div style="width:80%; margin:auto">
<form action="student_info.php" method="post">
    <input type="number" name="roll" placeholder="student roll numbar">
    <input type="text" name="st_name" placeholder="enter student name">
    <input type="text" name="st_age" placeholder="enter student age">
    <input type="submit" name="submit" value="submit">
</form>
</div>