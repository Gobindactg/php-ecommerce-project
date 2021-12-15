<?php


$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error($connection));
 }

    if(isset($_REQUEST['submit5'])){

        $userName = $_POST['uname'];
        $class = $_POST['class'];
        $bangla = $_POST['bangla'];
        $english = $_POST['english'];
        $math = $_POST['math'];
        $science = $_POST['science'];
        $bob = $_POST['bob'];
        $religion = $_POST['religion'];


        $total = $bangla + $english + $math + $bob + $science + $religion;

        include "gpa_entry.php";
        
        if($bangla> 32 && $english> 32 && $math> 32 && $science> 32 && $bob> 32 && $religion> 32){
        $z = $b + $e + $m + $bo + $s + $r;
        $gpa = $z / 6;
                
        }else{
            $gpa = 0;
        } 
  
        
        $update_id = $_REQUEST['updating_hidden_id'];


$update_query = "UPDATE mark_table SET student_name='$userName', class='$class', bangla_mark='$bangla', english_mark='$english', math_mark='$math', science='$science', bob='$bob', religion='$religion', total_mark = '$total', gpa = '$gpa' WHERE id= $update_id";

$final_query = mysqli_query($connection,$update_query);

if($final_query){
    header("location: display.php?updated");
}else{
    echo " Data not updated";
}

    }








?>