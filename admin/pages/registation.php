<?php
          
        if(isset($_POST['admin_update'])){
                $admin_name = $_POST['admin_name'];
                $admin_email = $_POST['admin_email'];
                $admin_phone = $_POST['admin_phone'];
                $admin_pass = $_POST['admin_pass'];
                $admin_address = $_POST['admin_address'];
                $admin_about = $_POST['details'];
                $rec_file = $_FILES['upload_image'];
                $image_name = $rec_file['name'];
                $image_tmp_name = $rec_file['tmp_name'];
                if(!empty($image_name)){

                    $loc = "images/";
                    if(move_uploaded_file($image_tmp_name, $loc.$image_name)){
                     // header("location: blog.php");
                    }else{
                      echo " Your File is empty";
                    }
      
              }
         
            $connection = mysqli_connect('localhost','root','','user_info');
            if(!$connection){
                die("Not connected". mysqli_error()); 
            }
              $query = "INSERT INTO admin_table(admin_name, admin_email, admin_phone, admin_pass, admin_address, admin_about, picture) VALUES ('$admin_name', '$admin_email', '$admin_phone', '$admin_pass', '$admin_address', '$admin_about', '$image_name')";
           
              $result = mysqli_query($connection,$query);
         
            
            if($result){?>
               <div class="container"><h3 style="color: green; font-style: italic;"><?php echo "Your Registation Completed Successfully. Please Login Your Email And Password";?></h3></div> <?php
         
                }else{?>
                  <div class="container"><h3 style="color: red; font-style: italic;"><?php echo "Data Insert Is Not Successfully Or Email is dublicate";?></h3></div> <?php
                  
                }
              
            }
            
            
                       
            
            ?>




<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>admin Registation Form</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="./css/registation.css">
   
   
  </head>
  <body class="h-70">
    <div class="container" style="width:98%">
      
            <!-- Page Header -->
            
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="regi">
            <div class="regi_headder">
                 <span style="color:yellow; font-size:25px; font-family:tahoma; padding-left:15px; " class="text-uppercase page-subtitle">Admin <span style="color:yellow; font-size:25px;"> Registation</span> </span>
                <h3 style="color:white; font-size:25px; font-family:tahoma; padding-left:15px;" class="page-title">Admin Profile</h3>
                
              </div>
              <div class="col-lg-12">
                <div class="card card-small mb-4">
                 
                  <ul class="list-group list-group-flush">
                    
                      <div class="row">
                        <div class="col">
             
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                              
                                <label for="feFirstName">Your Name</label>
                                <input type="text" class="form-control" id="feFirstName" name="admin_name" placeholder=" Type You name" value=""> 
                            
                            </div>
                            
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" class="form-control" name="admin_email" id="feEmailAddress" placeholder="Email" value=""> </div>
                              <div class="form-group col-md-6">
                                <label for="fePassword">Password</label>
                                <input type="password" class="form-control" name="admin_pass" id="fePassword" placeholder="Password" value=""> </div>
                            </div>
                            
                            <div class="form-group">
                              <label for="feInputAddress">Phone </label>
                              <input type="number" class="form-control" name="admin_phone" id="feInputAddress" placeholder="Type Your Phone Number" value=""> </div>

                            <div class="form-group">
                              <label for="feInputAddress">Address</label>
                              <input type="text" class="form-control" name="admin_address" id="feInputAddress" placeholder="Type Your Address" value=""> </div>
                           
                              <div class="form-row">
                             
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <label for="feDescription">Description</label>
                                <textarea class="form-control" name="details" name="feDescription" rows="5" placeholder=" Write Something about your self."></textarea>
                              </div>
                            </div>
                            <div >
                              <label for="feInputAddress">Profile Picture</label>
                              <input  type="file" id="image" name="upload_image" value="upload">
                            </div>
                            <button type="submit" name="admin_update" >Update Account</button>
                            
                          </form>

                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
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