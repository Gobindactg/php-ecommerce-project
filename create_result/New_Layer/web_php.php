<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/layer_class_dropdown1.css">
    
    <title>New Technology</title>
</head>
<body>
    <div class="wrapper">
       <!-- <div class="signup">
            <div class="login">
                <label for="">Login</label>
                <input type="email" name="email" placeholder="Enter your Email">
            </div>
            <div class="sign">
                <label for="">Password</label>
                <input type="email" name="password" placeholder="Enter your Email">
            </div>
        </div>-->
        <div class="header"> 
                           
            <div class="logo">
                <h3>NEW<span>TECHNOLOGY</span></h3>
            </div>
            <div class="main_menu"> 
                <ul>
                    <li><a href="web_php.php">Home</a></li>
                   
                    
                    <li><a href="#">Contact</a>
                        <ul>
                            <li><a target="_blank" href="send_mail.php">Send Email</a></li>
                            <li><a href="#">Our Address</a></li>
                        </ul>
                    </li>
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
                            <li><a href="signup.php">Registration</a></li>
                            <li><a href="#">Login</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blogs</a>
                        <ul>
                            <li><a href="blog.php">Create Blogs</a></li>
                            <li><a target="_blank" href="display_blog.php">Read Blogs</a></li>
                           
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
            
            <div class="content">
                <h3>Best mobile Seller Products</h3>
                <hr/><hr>
                <div class="single_product"> 
                    <img src="image/mobile.png" alt="">
                    <p>Facial Cream<br> Price TK 500 <br> This is a orginal Samsung Official Product.</p>
                </div>
                <div class="single_product middle_product"> 
                    <img src="image/oppo.webp" alt="">
                    <p>Samsung Mobile<br> Price TK 18000 <br> This is a orginal <a href="https://www.oppo.com">Oppo</a> Official Product.</p>
                </div>
                <div class="single_product"> 
                    <img src="image/mi.png" alt="">
                    <p>Facial Cream<br> Price TK 500 <br> This is a orginal <a href="https://www.realme.com">realme</a> Official Product.</p>
                    
                </div>
                <div class="second">
                 
                    <h3 >Best laptop Seller Products</h3>
                    <hr><hr>
                 </div>
                <div class="single_product"> 
                    <img src="image/dell.png" alt="">
                    <p> Model: Dell 5570 <br> Price TK 50000 <br> This is a orginal <a target="_blank" href="http://www.dell.com">Dell</a> Official Product.</p>
                </div>
                <div class="single_product middle_product"> 
                    <img src="image/hp2.png" alt="">
                    <p>Model: Hp core i5 4560<br> Price TK 62000 <br> This is a orginal <a target="_blank" href="https://www.hp.com">Hp</a> Official Product.</p>
                </div>
                <div class="single_product"> 
                    <img src="image/asus.png" alt="">
                    <p>Model: Asus core i3 8865<br> Price TK 50500 <br> This is a orginal <a target="_blank" href="https://www.asus.com">realme</a> Official Product.</p>
            </div>
        </div>
        <div class="blog">
            <h2><b></b>our New Blogs</b></h2>
            <hr><hr>
        </div>
        <?php
            $connection = mysqli_connect('localhost','root','','user_info');
                 if(!$connection){
                 die("Not connected". mysqli_error()); 
                     }
            $query = "SELECT * FROM blog_table ORDER BY s_date DESC LIMIT 5";
            $result = mysqli_query($connection,$query);
            $count = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)){
                $id = $row['blog_id'];
                $title = $row['title'];
                $body = $row['body'];
                $date = $row['s_date'];
                $user = $row['user'];
                $blog_image = $row['blog_image'];
                
                                                                            
            ?>

     <div class="blog" >
         
       
         <h3 style="color:yellow; font-weight: 600; background-color: rgb(0, 69, 71); padding-bottom:15px"> <?php echo $title; ?></h3>
         <p>Posted by : <?php echo $user;?>  ||  submited time: <?php echo $date; ?> </p>
         <p><img height="180px" width="auto" src="images/<?php echo $blog_image?>" alt=""></p>
         <p style="color:black; font-weight: 400; background-color:papayawhip "><?php echo $body; ?><a href="">read more</a></p>
         <button>Like</button> || <a href="blog_copy.php?id=<?php echo $id ?>">edit</a> ||  <a href="blog_delete.php?id=<?php echo $id ?>">Delete</a>
         <hr><hr>
        
    </div>
    <?php
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
            <img src="image/testimonials-2.jpg" alt="">
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










