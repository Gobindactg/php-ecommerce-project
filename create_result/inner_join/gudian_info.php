
<div style="width:80%; margin:auto">
<form action="gudian_info.php" method="post">
    <input type="text" name="st_id" placeholder="Enter roll number">
    <input type="text" name="father_name" placeholder="enter father name">
    <input type="text" name="mother_name" placeholder="enter student mother name"><br>
  
    <input type="submit" name="submit" value="submit">
</form>
</div>
<?php

if(isset($_POST['submit'])){
    $father_name = $_POST['father_name'];
    $mother_name= $_POST['mother_name'];
    $st_id = $_POST['st_id'];

$connection = mysqli_connect('localhost','root','','user_info');
if(!$connection){
    die("Not connected". mysqli_error()); 
}

$query = "INSERT INTO gudian_info (st_id, father_name, mother_name) VALUES ('$st_id', '$father_name', '$mother_name')";
$result = mysqli_query($connection,$query);

if($result){
    echo "Data Insert Successfully";
    header("location: gudian_info.php?success");
    }else{
      echo "Data Insert Is Not Successfully";  
    }
}

?>