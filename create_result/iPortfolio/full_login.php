
<html lang="en">
<head>
  <title>User login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="full_login1.css">
  

  <?php

if(isset($_POST['submit'])){
     
        $userName = $_POST['uname'];
        $userEmail = $_POST['email'];
        $userPass = $_POST['password'];
        $userrePass = $_POST['repassword'];
        $gender = $_POST['gender'];
        $userbirth = $_POST['birth'];
       
        $rec_file = $_FILES['upload_image'];
        $image_name = $rec_file['name'];
        $image_tmp_name = $rec_file['tmp_name'];

        if(!empty($image_name)){

              $loc = "images/";
              if(move_uploaded_file($image_tmp_name, $loc.$image_name)){
                header("location: full_login.php");
              }else{
                echo " Your File is empty";
              }

        }
  
      
   if($userName && $userEmail && $userPass && $userrePass && $userbirth !='' && $userPass == $userrePass){
         
        $connection = mysqli_connect('localhost','root','','user_info');

        if(!$connection){
            die("Not connected". mysqli_error()); 
        }

  $query = "INSERT INTO login_table (user_name, user_email, user_pass, user_re_pass, gender, date_of_birth, profile_pic) VALUES ( '$userName', '$userEmail', '$userPass', '$userrePass', '$gender', '$userbirth', '$image_name')";
  $result = mysqli_query($connection, $query);
   
  if($result){
    echo "Data Insert Successfully)";
    }else{
      echo "Data Insert Is Not Successfully";  
    }
      
   if($result){
     header("location: full_login.php?Success");
     
     
    }  
}

}

?>
<?php


?>

  
  <!-- Button to Open the Modal 
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
   Log In
  </button> -->
    <?php


 

 
 
    ?>


<body class="full">

<div>
    <div class="header">
      <form action="login_check.php" method="post">
            <h2>Log in</h2>
            <input type="email" name="logemail" placeholder="Enter Your Email">
            <input type="password" name="logpassword" placeholder="Enter Your Password">
            <input type="submit" name="submit6" value="Login"> 
            
         
      </form>
     </div>
    
    <div class="header">
          <h2>All Education Result </h2>
         
    </div>
</div>


            <div class="row">
                <div class="column">
                <img src="assets/img/17.jpg"  alt="">
            </div>
            <div class="column" >

                <div class="header2">
                            <h3 class="modal-title">New School Registation Form</h3>
              </div>

                        <?php
                        
                        if(isset($_REQUEST['Success'])){
                          echo "<font color='green'><h3>Your Information Successfully Sumitted</h3></font>";
                        }else{
                          echo " <font color='red'><h3>Please Submit Your Information</h3></font>";
                        }
                        ?>
                <div class="body">
                          <form action="?" method="post" enctype="multipart/form-data">
                              <label for="">User Name </label><br>
                              <input type="text" name="uname" placeholder="Enter Your Name" ><br>
                              <label for="">User Email </label><br>
                              <input type="email" name="email" placeholder="Enter Your email" ><br>
                              <label for="">User Password </label><br>
                              <input type="password" name="password" placeholder="Enter Your password" ><br>
                              <label for="">Re-enter User Password </label><br>
                              <input type="password" name="repassword" placeholder="Enter Your Password" ><br>
                              <label for="">Gender </label><br>
                              <select name="gender" class="gender" id="">
                                  <option value=""> Select Gender</option>
                                  <option value="male"> Male </option>
                                  <option value="female">Female</option><br>
                              </select><br>
                              
                                 
                             
                              <label for="">User Date Of Birth </label><br>
                              <input type="date" name="birth" placeholder="Enter Your Date Of Birth" ><br><br>
                              
                              <input type="file" name="upload_image" value="upload"><br><br>
                            
                              <div class="submit">
                              <input  type="submit" name="submit"  ><br>
                          
                            </div>
                            <div class="forgot">
                              <input type="submit" name="Forgot" value="Forgot Your Password" ><br>
                            <!-- <a type="submit" href="display.php" value="CLOSE">Close</a>-->
                            </div>
                            
                            </form>
                          </div>
                  
                </div>
</div>

  
       
    
    </body>
    </html>
