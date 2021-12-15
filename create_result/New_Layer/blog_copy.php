<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/layer_class_dropdown1.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/blog_edit.css">
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


$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error()); 
}
if(isset($_REQUEST['id'])){

 $get_id = $_REQUEST['id'];

 $get_info = "SELECT * FROM blog_table WHERE blog_id = $get_id";

 $update_info = mysqli_query($connection,$get_info);

 while( $row= mysqli_fetch_assoc($update_info)){
    
    ?>

        <div class="content" style="background-color:">
                <form action="blog_update.php?updated" method="post" enctype="multipart/form-data">
                    <div class="blog_title">
                        <h2>Blogs Titles</h2><br>
                        <input  type="text" name="headding" value="<?php echo $row['title']?>"><br>
                    </div>
                    <div class="blog_body">
                        <h3>Blog Description</h3><br>
                        <textarea type="text" name="body" rows="3" cols="32" value=""><?php echo $row['body']?></textarea><br>
                                                
                    </div>
                    <div>
                        <input type="file" name="image" value="upload"><br><br>
                    </div>
                    <div class="blog_user">
                         <h3>Blog user</h3><br>
                         <input type="text" name="user" value="<?php echo $row['user']?>">
                    </div>
                    
                    <div class="blog_submit">
                        <input type="submit" name="blog_update" value="Update">
                    </div>
                    <input type="hidden" name="updating_hidden_id" value="<?php echo $get_id; ?>">
                </form>
                                                                                                                                      
                  
        </div>
</div>






<?php


 }

}



?>
    
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










