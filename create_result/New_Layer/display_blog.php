<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="css/display_blog.css">
    
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
            
            <div class="content">
                                                                                                                                                                                                                                                                                                                                                                                                                                                   
        
        <div class="blog">
            <h2><b></b>our New Blogs</b></h2>
            <form action="" method="post">
            <input type="text" name="search_name" value="" placeholder="search">
            <input type="submit" name="search" value="search by Class"> 
            </form>
            <hr><hr>
        </div>
        <?php
            $connection = mysqli_connect('localhost','root','','user_info');
                 if(!$connection){
                 die("Not connected". mysqli_error()); 
                     }
           
            $query = "SELECT * FROM blog_table ORDER BY s_date DESC";
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

     <div class="blog">
         
       
     <h3 style="color:teal; font-weight: 600; "> <?php echo $title; ?></h3>
         <p>Posted by : <?php echo $user;?>  ||  submited time: <?php echo $date; ?> </p>
         <p><img height="180px" width="auto" src="images/<?php echo $blog_image?>" alt=""></p>
         <p style="color:black; font-weight: 400; "><?php echo $body; ?><a href="">read more</a></p>
         <button>Like</button> || <a href="blog_copy.php?id=<?php echo $id ?>">edit</a> ||  <a href="blog_delete.php?id=<?php echo $id ?>">Delete</a>
         <hr><hr>
    </div>
    <?php
            }
    ?>
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










