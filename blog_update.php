<?php


$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error($connection));
 }

 if(isset($_POST['blog_update'])){
    $title = $_POST['headding'];
    $body = $_POST['body'];
    $update_id = $_REQUEST['updating_hidden_id'];
    $img = $_FILES['image'];
    $tmp_name = $img['tmp_name'];
    $file_name = $img['name'];
   // if($img){
        //    if(file_exists("images/".$row['blog_image']) && !empty($row['blog_image'])){
       //     unlink("images/".$row['blog_image']);
       //     }
      //  move_uploaded_file($tmp_name, "images/".$file_name);
        if($img){
            $update_query = "UPDATE blog_table SET title='$title', body='$body', blog_image='$file_name' WHERE blog_id= $update_id";
        }
        else{
            $update_query = "UPDATE blog_table SET title='$title', body='$body', WHERE blog_id= '$update_id'";
        }
   // }
           // $update_query = "UPDATE blog_table SET title='$title', body='$body', user='$user' WHERE blog_id= $update_id";
    




$final_query = mysqli_query($connection,$update_query);

if($final_query){
    header("location:index.php?updated");
}

    }

?>












