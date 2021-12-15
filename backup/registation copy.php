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
                $rec_file = $_FILES['upload_image'];
                $image_name = $rec_file['name'];
                $image_tmp_name = $rec_file['tmp_name'];
                if(!empty($image_name)){

                    $loc = "./images/";
                    if(move_uploaded_file($image_tmp_name, $loc.$image_name)){
                     // header("location: blog.php");
                    }else{
                      echo " Your File is empty";
                    }
      
              }
          
              //echo $admin_name;
              //echo $user_email;
            // exit();
            $connection = mysqli_connect('localhost','root','','user_info');
            if(!$connection){
                die("Not connected". mysqli_error()); 
            }

            
            $query = "INSERT INTO user_table(user_name, user_email, user_phone, user_pass, user_address, user_about, picture) VALUES ('$admin_name', '$user_email', '$user_phone', '$user_pass', '$user_address', '$user_about', '$image_name')";
            //$query = "INSERT INTO admin_table(user_name, user_email, user_pass, user_address, user_about, picture) VALUES ('$admin_name', '$user_email', '$user_pass', '$user_address', '$user_about' '$image_name')";
            $result = mysqli_query($connection,$query);
            
            if($result){?>
               <h3 style="color: green; font-style: italic;"><?php echo "Your Registation Completed Successfully. Please Login Your Email And Password";?></h3> <?php
              // header("location: login_user.php?success");
                }else{
                  echo "Data Insert Is Not Successfully";  
                }
            }
            
            
                       
            
            ?>


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