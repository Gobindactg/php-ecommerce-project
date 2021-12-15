
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="mark_entry1.css">
  





  <?php
  

  session_start();
  

if(isset($_POST['submit'])){
     
        $userName = $_POST['uname'];
        $class = $_POST['class'];
        $bangla = $_POST['bangla'];
        $english = $_POST['english'];
        $math = $_POST['math'];
        $science = $_POST['science'];
        $bob = $_POST['bob'];
        $religion = $_POST['religion'];
        include "gpa_entry.php";
        if($bangla> 32 && $english> 32 && $math> 32 && $science> 32 && $bob> 32 && $religion> 32){
          $z = $b + $e + $m + $bo + $s + $r;
          $gpa = $z / 6;}
          else{ 
            $gpa = 0;
          }
         
          $total = (int)$bangla+ (int)$english + (int)$math + (int)$science + (int)$bob + (int)$religion;


      
 $connection = mysqli_connect('localhost','root','','user_info');

if($connection){
  echo "Data base is connect";
  echo "<br>";
  
     // die("Not connected". mysqli_error()); 
}

    echo $userName;
    echo "<br>";
    echo $class;
    echo "<br>";




  $query = "INSERT INTO mark_table (student_name, class, bangla_mark, english_mark, math_mark, science, bob, religion, total_mark, gpa) VALUES ('$userName', '$class', '$bangla', '$english', '$math', '$science', '$bob', '$religion', '$total', '$gpa')";
  //$query = "INSERT INTO mark_table (student_name, class, bangla_mark, english_mark, math_mark, science, bob, religion) VALUES ('$userName', '$class', $bangla', '$english', '$math', '$science', '$bob', '$religion')";
  $result = mysqli_query($connection,$query);
   
 
  if($result){
    echo "Data Insert Successfully";
    header("location: display.php?success");
    }else{
      echo "Data Insert Is Not Successfully";  
    }
      

}



?>
 
<?php
echo "<br>";
if(isset($_REQUEST['success'])){

  echo "<font color='green'><h3>Your Information updated Successfully</h3></font>";
}

?>

<body class="full1">

<div>
    
    </div>



                       
                <div class="body">
                          <form action="?" method="post">
                              <label for="">Student Name </label><br>
                              <input type="text" name="uname" placeholder="Enter Your Name" ><br>
                              <label for="">Class</label><br>
                              <select name="class" class="gender" id="">
                                  <option value=""> Select Class</option>
                                  <option value="one"> One </option>
                                  <option value="two">Two</option><br>
                                  <option value="three">Three</option><br>
                                  <option value="four">Four</option><br>
                                  <option value="five">Five</option><br>
                              </select><br>
                              <label for="">Bangla Mark </label><br>
                              <input type="number" name="bangla" placeholder="Enter Your mark" ><br>
                              <label for="">English Mark </label><br>
                              <input type="number" name="english" placeholder="Enter Your mark" ><br>
                              <label for="">Math Mark </label><br>
                              <input type="number" name="math" placeholder="Enter Your mark" ><br>
                              <label for="">science Mark </label><br>
                              <input type="number" name="science" placeholder="Enter Your mark" ><br>
                              <label for="">BOB Mark </label><br>
                              <input type="number" name="bob" placeholder="Enter Your mark" ><br>
                              <label for="">Religion Mark </label><br>
                              <input type="number" name="religion" placeholder="Enter Your mark" ><br><br>
                            
                            
                            
                              <div class="submit">
                              <input  type="submit" name="submit"  ><br>
                          
                            </div>

                            
                            </form>
                          </div>
                  
                </div>
</div>

  
       
    
    </body>
    </html>
