


<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User Registation Form</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="./css/registation1.css">
   
   
  </head>
  <body class="h-100">
    <div class="container" style="width:98%">
    <?php
         	if(isset($_GET['logout'])){
            require 'admin/function.php';
            user_logout();
          }
          

        if(isset($_POST['user_update'])){
                $admin_name = $_POST['user_name'];
                $user_email = $_POST['user_email'];
                $user_phone = $_POST['user_phone'];
                $user_pass = $_POST['user_pass'];
                $user_address = $_POST['user_address'];
                $user_about = $_POST['details'];
               
                $directory="./images/";
                $target_file=$directory.$_FILES['upload_image']['name'];
                $file_type=pathinfo($target_file, PATHINFO_EXTENSION);
              
                $file_size = $_FILES['upload_image']['size'];
               
                $check = getimagesize($_FILES['upload_image']['tmp_name']);
                
              ?>
            <div style="padding-top:5px">
              <h3 style="color:red; font-family:tahoma; font-weight:400; font-style:italic; background-color:black; height:30px; padding-left:10px;"><?php if($check){
                    if(file_exists($target_file)){
                        echo 'This image is already exists! Please try again later';
                        }else{
                            if($file_type !='jpg' && $file_type !='png'){
                                echo "Your file type is not valid! Please try again";
                            }else{
                                if($file_size> 1048576){
                                    echo " Your file Size is Too larges! Please tyy again";
                                }else{
                                    move_uploaded_file($_FILES['upload_image']['tmp_name'], $target_file);
                                    $connection = mysqli_connect('localhost','root','','user_info');
                                    if(!$connection){
                                        die("Not connected". mysqli_error()); 
                                    }
                                    if(file_exists($user_email)){
                                    $query = "INSERT INTO user_table(user_name, user_email, user_phone, user_pass, user_address, user_about, picture) VALUES ('$admin_name', '$user_email', '$user_phone', '$user_pass', '$user_address', '$user_about', '$target_file')";
                                   // $query = "INSERT INTO image_table (image_name, upload_image) VALUES ('$image_title', '$target_file')";
                                    $result = mysqli_query($connection,$query);
                                    echo "Your registation Completed successfully. Please Login using email and password";
                                  }else{
                                    echo "This Email already Registered! Please Retry New Email Number";
                                  }
                                }
                            }
                        }
                }else{
                    if(file_exists($user_email)){
                      $query = "INSERT INTO user_table(user_name, user_email, user_phone, user_pass, user_address, user_about) VALUES ('$admin_name', '$user_email', '$user_phone', '$user_pass', '$user_address', '$user_about')";
                    // $query = "INSERT INTO image_table (image_name, upload_image) VALUES ('$image_title', '$target_file')";
                      $result = mysqli_query($connection,$query);
                      echo "Your registation Completed successfully. Please Login using email and password";
                    }else{
                      echo "This Email already Registered! Please Retry New Email Number";
                    }
                }?></h3></div>
                <?php
            }
           
          
                       
            
            ?>
            <!-- Page Header -->
            <div class="regi">
            <div class="regi_headder">
                 <span style="color:yellow; font-size:25px; font-family:tahoma; padding-left:15px; " class="text-uppercase page-subtitle">User <span style="color:yellow; font-size:25px;"> Registation</span> </span>
                <h3 style="color:white; font-size:25px; font-family:tahoma; padding-left:15px;" class="page-title">User Profile</h3>
                
              </div>
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                  
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col" style="background-color:lightslategrey; padding-left:5px; padding-right:5px">
             
           
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group" >
                              
                                <label for="feFirstName">Your Name</label>
                                <input type="text" class="form-control" id="feFirstName" name="user_name" placeholder=" Type You name" value=""> 
                            
                            </div>
                            <div class="form-group">
                              
                            <label for="feEmailAddress">Email</label>
                                <input type="email" class="form-control" name="user_email" id="feEmailAddress" placeholder="Email" value="">
                            
                            </div>
                            <div class="form-group">
                                <label for="fePassword">Password</label>
                                <input type="password" class="form-control" name="user_pass" id="fePassword" placeholder="Password" value="">
                              
                            </div>
                                                       
                            <div class="form-group">
                              <label for="feInputAddress">Phone </label>
                              <input type="number" class="form-control" name="user_phone" id="feInputAddress" placeholder="Type Your Phone Number" value=""> </div>

                            <div class="form-group">
                              <label for="feInputAddress">Address</label>
                              <input type="text" class="form-control" name="user_address" id="feInputAddress" placeholder="Type Your Address" value=""> </div>
                           
                              <div class="form-row">
                             
                            </div>
                            <div class="form-group">
                             
                                <label for="feDescription">Description</label>
                                <textarea class="form-control" name="details" name="feDescription" rows="5" placeholder=" Write Something about your self."></textarea>
                            
                            </div>
                            <div class="form-group">
                              <label for="feInputAddress">Profile Picture</label>
                              <p style="color:yellow; padding-left:10px;">(Image Size Max 1mb and type jpg or png) </p><br>
                              <input style="height:38px" type="file" id="image" name="upload_image" value="upload">
                            </div>
                            <button type="submit" name="user_update" class="btn btn-accent">Update Account</button>
                          </form>

                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End Default Light Table -->
          </div>
         
        </main>
      </div>
    </div>
   
    
    </div>
  </body>
</html>