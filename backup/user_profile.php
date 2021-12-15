<?php
//when stop reload option
$user_id = $_SESSION['user_id'];
if($user_id == NULL){
	header('location:user_login.php');
}
             /*  if(isset($_POST['profile_update'])){
                $admin_name = $_POST['user_name'];
                $user_email = $_POST['user_email'];
                $user_pass = $_POST['user_pass'];
                $user_address = $_POST['user_address'];
                $user_about = $_POST['details'];
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
          
              //echo $admin_name;
              //echo $user_email;
            // exit();
            $connection = mysqli_connect('localhost','root','','user_info');
            if(!$connection){
                die("Not connected". mysqli_error()); 
            }

            
            $query = "INSERT INTO admin_table(user_name, user_email, user_pass, user_address, user_about, picture) VALUES ('$admin_name', '$user_email', '$user_pass', '$user_address', '$user_about', '$image_name')";
            //$query = "INSERT INTO admin_table(user_name, user_email, user_pass, user_address, user_about, picture) VALUES ('$admin_name', '$user_email', '$user_pass', '$user_address', '$user_about' '$image_name')";
            $result = mysqli_query($connection,$query);
            
            if($result){
                echo "Data Insert Successfully";
               // header("location: web_php.php?success");
                }else{
                  echo "Data Insert Is Not Successfully";  
                }
            }
            
            
                       */
            
            ?>




<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>User Registation</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/user.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="styles/shards-dashboards.1.1.0.min.css">
    <link rel="stylesheet" href="styles/extras.1.1.0.min.css">
   
  </head>
  <body class="h-100">
    <div class="container">
            <div class="headder_out" style="padding:10px 10px">
              <div class="out">
              
                <h3 style="padding-left:5px;"> Welcome : <span style="color:teal;"><?php echo $_SESSION['user_name']?></span><h3> 
              </div>
            </div>
            <!-- Page Header 
            <div class="page-header row no-gutters py-16" style="background-color: darkgrey; width:100%">
              <div class="col-16 col-sm-16 text-center text-sm-left mb-0">
                 <span style="color:green; font-size:25px; font-family:tahoma; width:100% padding-left:15px" class="text-uppercase page-subtitle">Welcome :  <span style="color:yellow; font-size:25px"> <?php echo $_SESSION['admin_name']?></span><span style="padding-left:85%"><a href="">Logout</a></span></span>
                <h3 style="color:white; font-size:25px; font-family:tahoma; padding-left:15px" class="page-title">User Profile</h3>
                
              </div>
              <div>
              <span style="color:green; font-size:25px; font-family:tahoma; width:100% padding-left:15px" class="text-uppercase page-subtitle">Welcome :  <span style="color:yellow; font-size:25px"> <?php echo $_SESSION['admin_name']?></span><span style="padding-left:85%"><a href="">Logout</a></span></span>
                <h3 style="color:white; font-size:25px; font-family:tahoma; padding-left:15px" class="page-title">User Profile</h3>
                
              </div>
            
            </div>-->
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                    <div class="mb-3 mx-auto">
                      <img class="rounded-circle" src="images/<?php echo $_SESSION['user_picture']?>" alt="User Avatar" width="110"> </div> <br>
                     <!--<img class="rounded-circle" src="img/gallery/photo1.jpg" alt="User Avatar" width="110"> </div>-->
                    <h3 class="mb-0"><?php echo $_SESSION['user_name']?></h3><br>
                    <span class="text-muted d-block mb-2">Project Manager</span>
                    <span class="text-muted d-block mb-2">Email : <?php echo $_SESSION['user_email']?></span>
                    <span class="text-muted d-block mb-2">Phone : <?php echo $_SESSION['user_phone']?></span>
                    <button style="background-color:green; color:yellow;" type="button" class="mb-2 btn btn-sm btn-pill btn-outline-primary mr-2">
                      <i  class="material-icons mr-1"></i>Follow</button>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item px-4">
                      <div class="progress-wrapper">
                        <strong class="text-muted d-block mb-2">Workload</strong>
                        <div class="progress progress-sm">
                          <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 74%;">
                            <span class="progress-value">74%</span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item p-4">
                      <strong class="text-muted d-block mb-2">Description</strong>
                      <span><?php echo $_SESSION['user_details']?></span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="card card-small mb-4">
                  <div class="card-header border-bottom">
                    <h2 class="m-0">Account Details || <a href="./user_display_blog.php">Your Blog</a></h2>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
             
           
                        <form action="user_update.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="feFirstName">Your Name</label>
                                <input type="text" class="form-control" id="feFirstName" name="user_name" placeholder=" Type You name" value="<?php echo $_SESSION['user_name'] ?>"> 
                            </div>

                            <div class="form-group">
                                <label for="feEmailAddress">Email</label>
                                <input type="email" class="form-control" name="user_email" id="feEmailAddress" placeholder="Email" value="<?php echo $_SESSION['user_email'] ?>"> 
                            </div>

                            <div class="form-group">
                                <label for="fePassword">Password</label>
                                <input type="text" class="form-control" name="user_pass" id="fePassword" placeholder="Password" value="<?php echo $_SESSION['user_pass']?>"> 
                            </div>

                            <div class="form-group">
                            <label for="feInputAddress">Phone </label>
                              <input type="number" class="form-control" name="user_phone" id="feInputAddress" placeholder="Type Your Phone Number" value="<?php echo $_SESSION['user_phone']?>">
                            </div>

                            <div class="form-group">
                            <label for="feInputAddress">Address</label>
                              <input type="text" class="form-control" name="user_address" id="feInputAddress" placeholder="Type Your Address" value="<?php echo $_SESSION['user_address']?>">
                            </div>

                            <div class="form-group">
                            <label for="feDescription">Description</label>
                                <textarea class="form-control" name="details" name="feDescription" rows="5" placeholder=" Write Something about your self."><?php echo $_SESSION['user_details']?></textarea>
                            </div>

                             
                            <div class="form-group">
                              <label for="feInputAddress">Profile Picture</label>
                              <input style="height:38px" type="file" id="image" name="upload_image" value="upload">
                            </div>
                            <button type="submit" name="profile_update" class="btn btn-accent">Update Account</button>
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
          <footer class="main-footer d-flex p-2 px-3 bg-white border-top">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="../index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
            </ul>
            <span class="copyright ml-auto my-auto mr-2">Copyright © 2018
              <a href="https://designrevision.com" rel="nofollow">DesignRevision</a>
            </span>
          </footer>
        </main>
      </div>
    </div>
   
    
    </div>
  </body>
</html>