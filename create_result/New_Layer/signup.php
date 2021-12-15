<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/layer_class_dropdown1.css">
    <link rel="stylesheet" href="css/signup.css">

    <title>New Technology</title>
</head>
<body>
    <div class="wrapper">
        <div class="header"> 
                           
            <div class="logo">
                <h3>NEW<span>TECHNOLOGY</span></h3>
            </div>
            <div class="main_menu"> 
                <ul>
                    <li><a href="web_php.php">Home</a></li>
                   
                    <li><a href="signup.php">Registration</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Ebook</a> 
                        <ul>
                            <li><a href="#">Class One</a></li>
                            <li><a href="#">Class Two</a></li>
                            <li><a href="#">Class Three</a></li>
                            <li><a href="#">Class Four</a></li>
                            <li><a href="#">Class Five</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Digital School</a> 
                        <ul>
                            <li><a href="#">Registration</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blogs</a>
                        <ul>
                            <li><a href="blog.php">Create Blogs</a></li>
                            <li><a href="#">Read Blogs</a></li>
                           
                        </ul>
                    </li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="welcome_text">
                <h4>Welcome to You my website</h4>
            </div>
           
           
        </div>
        
        
        
        <div class="main_content">
            <div class="sidebar">
                <h3><u> Categories</u></h3>
                
                <ul>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Cosmatic</a></li>
                    <li><a href="#">Winter</a></li>
                    <li><a href="#">Cloths</a></li>
                    <li><a href="#">Garments</a></li>
                    <li><a href="#">Furniture</a></li>
                    <li><a href="#">Electronic</a></li>
                    <li><a href="#">Kids Item</a></li>
                </ul>
                <h3><u> All Inportent Site</u></h3>
                <ul>
                    <li><a href="#">প্রাথমিক শিক্ষা অধিদপ্তর</a></li>
                    <li><a href="#">মাধ্যমিক শিক্ষা </a></li>
                    <li><a href="#"> শিক্ষক বাতায়ন </a></li>
                    <li><a href="#"> মুক্তপাঠ</a></li>
                    <li><a href="#"> নেপ</a></li>
                    <li><a href="#"> অর্থ মন্ত্রণালয়</a></li>
                </ul>
            </div>
            <?php
            
            if(isset($_POST['blog_submit'])){
                $title = $_POST['headding'];
                $body = $_POST['body'];
          
            $connection = mysqli_connect('localhost','root','','user_info');
            if(!$connection){
                die("Not connected". mysqli_error()); 
            }

            
            $query = "INSERT INTO blog_table (title, body) VALUES ('$title', '$body')";
            $result = mysqli_query($connection,$query);
            
            if($result){
                echo "Data Insert Successfully";
                header("location: web_php.php?success");
                }else{
                  echo "Data Insert Is Not Successfully";  
                }
            }
            
            
                       
            
            ?>
            <div class="content">
                <div class="signup">
                <h2>User Registration Form</h2>
                <form action="?" method="post" enctype="multipart/form-data">
                    <label for="">User Name</label>
                    <input padding="5" style="width: 100%; padding-bottom: 5px; " type="text" name="uname" placeholder="Enter Your Name" >
                    <label for="">User Email</label>
                    <input style="width: 100%; padding-top: 5px;  "  type="email" name="email" placeholder="Enter Your email">
                    <label for="">User Password</label>
                    <input  style="width: 100%; " type="password" name="password" placeholder="Enter Your password" ><br>
                    <label for="">User Re-password</label>
                    <input  style="width: 100%; "  type="password" name="repassword" placeholder="Enter Your Password" ><br>
                    <label for=""> Gender </label>
                    <select style="width: 100%; "   name="gender" class="gender" id="">
                        <option value=""> Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option><br>
                    </select><br>
                    <label for="">Marital Status</label>
                    <select style="width: 100%; "   name="gender" class="gender" id="">
                         <option value=""> Select marrital Status</option>
                         <option value="male"> Married </option>
                         <option value="female">Unmarried</option><br>
                    </select><br>
                                      
                    <label for="">Date Of Birth</label>
     
                    <input style="width: 100%; " type="date" name="birth" placeholder="Enter Your Date Of Birth" ><br><br>
                    <label for=""></label>
                    <input  style="width: 100%; " type="file" name="upload_image" value="upload"><br><br>
   
                    <div class="submit" >
                        <input style="width: 100%; " type="submit" name="submit"  ><br>
 
                    </div>
                   
                </div>
        </div>
   </form>
                                          
                                                                                       
   <div class="blog">
         <h2><b></b>Something to Write our Blogs</b></h2>
        <hr><hr>
         <h3> How to install windows 10 useing pendrive</h3>
         <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas <a href="">read more</a></p>
         <hr><hr>
         <h3> How to Create Youtube Chenel </h3>
         <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas <a href="">read more</a></p>
    </div>

    <div class="owner">
        <h2>Our Team Management</h2>
        <hr><hr>
        <div class="owner1">
            <img src="image/testimonials-1.jpg" alt="">
            <h3>CEO</h3>
            <p>noipunno digital</p>
        </div>
        <div class="owner1">
            <img src="image/testimonials-2.jpg" alt="">
            <h3>Director</h3>
            <p>noipunno digital</p>
        </div>
        <div class="owner1"> 
            <img src="image/testimonials-3.jpg" alt="">
            <h3>CO-DIRECTOR</h3>
            <p>noipunno digital</p>
        </div>
    </div>
    <div class="footer">
        <div class="footer_left">
            <a href=""><h4>Home</h4></a>
            <a href=""><h4>Contact</h4></a>
            <a href=""><h4>Email</h4></a>
        </div>
        <div class="footer_middle">
        <a href=""><img src="image/facebook.png"></a>
        <a href=""><img src="image/instagram.png"></a>
        <a href=""><img src="image/twitter.png"></a>
        <a href=""><img src="image/linkedin.png"></a>
        </div>
        <div class="footer_right">
            <a href=""><h4>@ Copy right : noipunno digital </h4></a>
            <a href=""><p>All kind of solution digital education</p></a>
        </div>
    </div>
    </body>
</html>










