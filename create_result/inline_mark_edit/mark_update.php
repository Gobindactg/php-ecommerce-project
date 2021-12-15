<?php


$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error($connection));
 }

 if(isset($_POST['mark_update'])){
   
    $roll = $_POST['st_roll'];
    $bangla = $_POST['bangla_mark'];
    $english = $_POST['english_mark'];
    $math = $_POST['math_mark'];
    $science = $_POST['science_mark'];
    $bob = $_POST['bob_mark'];
    $religion = $_POST['religion_mark'];
    $music = $_POST['music_mark'];
    $social = $_POST['social_mark'];
    $expressive = $_POST['expressive_mark'];
    $update_id = $_REQUEST['updating_hidden_id'];
   
       
    

    
    $update_query = "UPDATE mark_table SET student_roll='$roll', bangla_mark='$bangla', english_mark='$english', math_mark='$math', science_mark='$science', bob_mark='$bob', religion_mark='$religion', music_mark='$music', social_mark='$social', expressive_mark='$expressive' WHERE mark_id= $update_id ";

    $final_query = mysqli_query($connection,$update_query);

    if($final_query){
        header("location: mark_show.php?updated");
    }

        }

    ?>












