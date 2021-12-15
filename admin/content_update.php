<?php
session_start();

$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error($connection));
 }

 if(isset($_POST['update_category'])){
    $content_name = $_POST['content_name'];
    $content_description = $_POST['content_description'];
    $publication_status = $_POST['publication_status'];
    $update_id = $_REQUEST['content_id'];
  
    $update_query ="UPDATE content_category SET content_name='$content_name', content_description='$content_description', publication_status='$publication_status' WHERE content_id= '$update_id'";
 
    $final_query = mysqli_query($connection,$update_query);

    if($final_query){
        header("location: content_category.php?updated");
      //echo "Profile  updated";
    }else{
        echo "Profile do not updated";
    }

  }

?>