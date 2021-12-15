<?php
session_start();

$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error($connection));
 }

 if(isset($_POST['profile_update'])){
    $user_name = $_POST['user_name'];
    $user_email = $_POST['user_email'];
    $update_id = $_SESSION['user_id'];
    $user_pass = $_POST['user_pass'];
    $user_address = $_POST['user_address'];
    $user_about = $_POST['details'];
    $user_phone = $_POST['user_phone'];
    $img = $_FILES['upload_image'];
    $tmp_name = $img['tmp_name'];
    $file_name = $img['name'];
   /* if($img){
        if(file_exists("images/".$row['picture']) && !empty($row['picture'])){
            unlink("images/".$row['picture']);
        }*/
        move_uploaded_file($tmp_name, "images/".$file_name);
        if($file_name){
            $update_query = "UPDATE user_table SET  user_name='$user_name', user_email='$user_email', user_phone='$user_phone', user_pass='$user_pass', user_address='$user_address', user_about='$user_about', picture='$file_name' WHERE user_id= $update_id";
        }
        else{
            $update_query = "UPDATE user_table SET  user_name='$user_name', user_email='$user_email', user_phone='$user_phone', user_pass='$user_pass', user_address='$user_address', user_about='$user_about' WHERE user_id= $update_id";
        }
    }
           // $update_query = "UPDATE blog_table SET title='$title', body='$body', user='$user' WHERE blog_id= $update_id";
    


//$update_query = "UPDATE admin_table SET  user_name='$admin_name', user_email='$user_email', user_pass='$user_pass', user_address='$user_address', user_about='$user_about' WHERE admin_id= $update_id";

$final_query = mysqli_query($connection,$update_query);

if($final_query){
    header("location: user_login.php");
  //echo "Profile  updated";
}else{
    echo "Profile do not updated";
}

    

?>