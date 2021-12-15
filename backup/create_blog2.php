<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();

//when stop reload option
$user_id = $_SESSION['user_id'];
if($user_id == NULL){
	header('location:user_login.php');
}
if(isset($_GET['logout'])){
	require 'admin/function.php';
	user_logout();
}
?>


<!DOCTYPE HTML>
<html>
<head>
<title>create Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gifty Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/blog.css">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<script src="js/jquery.countdown.js"></script>
<script src="js/script.js"></script>
</head>
<body>
<div class="header_top">
  <div class="container">
  	<div class="header_top-box">
     <div class="header-top-left">
			  <div class="box">
			  	   	<select tabindex="4" class="dropdown drop">
					   <option value="" class="label" value="">Dollar :</option>
				       <option value="1">Dollar</option>
				       <option value="2">Euro</option>
					</select>
   			   </div>
   			   <div class="box1">
   				       <select tabindex="4" class="dropdown">
							<option value="" class="label" value="">English :</option>
							<option value="1">English</option>
							<option value="2">French</option>
							<option value="3">German</option>
					  </select>
   			   </div>
   				    <div class="clearfix"></div>
   			 </div>
			 <div class="cssmenu">
			 <ul>
					<li class="active"><a  href="?logout">User Logout</a></li> 
			 		<li class="active"><a href="user_profile.php">User profile</a></li> 		
					<li class="active"><a href="user_login.php">User Account</a></li> 
					<li><a href="wishlist.html">Wishlist</a></li> 
					<li><a href="admin_login.php">Log In</a></li> 
					<li><a href="registation.php">Sign Up</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
   </div>
</div>
</div>
<div class="header_bottom">
	<div class="container">
	 <div class="header_bottom-box">
		<div class="header_bottom_left">
			<div class="logo">
			<a  href="index.php"><h2 style="color:green; font-style:italic;, font-family:tahoma; font-size:35px"> TODAY<span style="color:red; font-style:italic;, font-family:tahoma; font-size:35px">SHOP</span></h2></a>
			</div>
			<ul class="clock">
				<i class="clock_icon"> </i>
				<li class="clock_desc">Justo 24/h</li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		<div class="header_bottom_right">
			<div class="search">
			  <input type="text" value="Your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your email address';}">
			  <input type="submit" value="">
	  		</div>
	  		<ul class="bag">
	  			<a href="#"><i class="bag_left"> </i></a>
	  			<a href="#"><li class="bag_right"><p>205.00 $</p> </li></a>
	  			<div class="clearfix"> </div>
	  		</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
</div>
<div class="menu">
	<div class="container">
		<div class="menu_box ">
	     <ul class="megamenu skyblue">
			<li class="active grid"><a class="color2" href="index.php">Home</a></li>
			<li><a class="color4" href="men.php">Special</a></li>				
			<li><a class="color10" href="single.php">Men Fashion</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Men</h4>
								<ul>
									<li><a href="men.php">Jackets</a></li>
									<li><a href="men.php">Blazers</a></li>
									<li><a href="men.php">Suits</a></li>
									<li><a href="men.php">Trousers</a></li>
									<li><a href="men.php">Jeans</a></li>
									<li><a href="men.php">Shirts</a></li>
									<li><a href="men.php">Sweatshirts & Hoodies</a></li>
									<li><a href="men.php">Swem Wear</a></li>
									<li><a href="men.php">Accessories</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Women</h4>
								<ul>
									<li><a href="men.php">Outerwear</a></li>
									<li><a href="men.php">Dresses</a></li>
									<li><a href="men.php">Handbags</a></li>
									<li><a href="men.php">Trousers</a></li>
									<li><a href="men.php">Jeans</a></li>
									<li><a href="men.php">T-Shirts</a></li>
									<li><a href="men.php">Shoes</a></li>
									<li><a href="men.php">Coats</a></li>
									<li><a href="men.php">Accessories</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col2">
							<div class="h_nav">
								<h4>Trends</h4>
								<ul>
									<li class>
										<div class="p_left">
										   <img src="images/t1.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Denim shirt</a></h4>
											<span class="item-cat"><small><a href="#">Jackets</a></small></span>
											<span class="price">29.99 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
									<li>
										<div class="p_left">
										  <img src="images/t2.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Denim shirt</a></h4>
											<span class="item-cat"><small><a href="#">Jackets</a></small></span>
											<span class="price">29.99 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
									<li>
										<div class="p_left">
										   <img src="images/t3.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Denim shirt</a></h4>
											<span class="item-cat"><small><a href="#">Jackets</a></small></span>
											<span class="price">29.99 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
								</ul>	
							</div>												
						</div>
					  </div>
					</div>
			</li>
			<li><a class="color3" href="404.html">Accessories</a></li>
			<li><a class="color7" href="#">Women's Fashion</a>
				<div class="megapanel ">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Men</h4>
								<ul>
									<li><a href="men.php">Jackets</a></li>
									<li><a href="men.php">Blazers</a></li>
									<li><a href="men.php">Suits</a></li>
									<li><a href="men.php">Trousers</a></li>
									<li><a href="men.php">Jeans</a></li>
									<li><a href="men.php">Shirts</a></li>
									<li><a href="men.php">Sweatshirts & Hoodies</a></li>
									<li><a href="men.php">Swem Wear</a></li>
									<li><a href="men.php">Accessories</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Women</h4>
								<ul>
									<li><a href="men.php">Outerwear</a></li>
									<li><a href="men.php">Dresses</a></li>
									<li><a href="men.php">Handbags</a></li>
									<li><a href="men.php">Trousers</a></li>
									<li><a href="men.php">Jeans</a></li>
									<li><a href="men.php">T-Shirts</a></li>
									<li><a href="men.php">Shoes</a></li>
									<li><a href="men.php">Coats</a></li>
									<li><a href="men.php">Accessories</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col2">
							<div class="h_nav">
								<h4>Trends</h4>
								<ul>
									<li class>
										<div class="p_left">
										   <img src="images/t1.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Denim shirt</a></h4>
											<span class="item-cat"><small><a href="#">Jackets</a></small></span>
											<span class="price">29.99 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
									<li>
										<div class="p_left">
										  <img src="images/t2.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Denim shirt</a></h4>
											<span class="item-cat"><small><a href="#">Jackets</a></small></span>
											<span class="price">29.99 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
									<li>
										<div class="p_left">
										   <img src="images/t3.jpg" class="img-responsive" alt=""/>
										</div>
										<div class="p_right">
											<h4><a href="#">Denim shirt</a></h4>
											<span class="item-cat"><small><a href="#">Jackets</a></small></span>
											<span class="price">29.99 $</span>
										</div>
										<div class="clearfix"> </div>
									</li>
								</ul>	
							</div>												
						</div>
					  </div>
					</div>
			</li>
			
			<li><a class="color8" href="display_blog.php">Blog</a> </li>
			<li><a class="color8" href="create_blog.php">Create Blog</a> </li>
			<div class="clearfix"> </div>
		 </ul>
	  </div>
</div>
</div>
<div class="index_slider">
	<div class="container">
	<?php
  

           
            if(isset($_POST['blog_submit'])){
				$title = $_POST['headding'];
                $body = $_POST['body'];
                
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

            
            $query = "INSERT INTO blog_table (blog_user, title, body, blog_image) VALUES ('$_SESSION[user_name]', '$title', '$body', '$image_name')";
            $result = mysqli_query($connection,$query);
            
            if($result){
                echo "Data Insert Successfully";
                //header("location: create_blog.php?success");
                }else{
                  echo "Data Insert Is Not Successfully";  
                }
            }
            
            
                       
            
            ?>
            <link rel="stylesheet" href="css/blog.css">
            <div class="content">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="blog_title">
                        <h2>Blogs Titles</h2><br>
                        <input  type="text" name="headding" placeholder="Write Your blogs titles"><br>
                    </div>
                    <div class="blog_body">
                        <h3>Blog Description</h3><br>
                        <textarea type="text" name="body" rows="3" cols="32" placeholder="Write Your blogs descriptions"></textarea><br>
                    </div>
                    <div>
                        <input type="file" id="image" name="upload_image" value="upload" accept="image/*" onchange="loadFile(event)"><br><br>
                    </div>
                    <div> <img  id="output" src="" alt="" style="height:200px; width:200px; border: 1px solid black;"></div>
                   
                    <div class="blog_submit">
                    <input type="submit" name="blog_submit" value="Submit">
                    </div>
                </form>

                <script type="text/javascript">
                     var loadFile = function(event) {
                     var output = document.getElementById('output');
                     output.src = URL.createObjectURL(event.target.files[0]);
                    output.onload = function() {
                    URL.revokeObjectURL(output.src) 
                        }
                      };
                </script>
           </div>
    </div>
    
	</div>
</div>

<div class="footer">
	<div class="container">
		<img src="images/pay.png" class="img-responsive" alt=""/>
		<ul class="footer_nav">
		  <li><a href="#">Home</a></li>
		  <li><a href="#">Blog</a></li>
		  <li><a href="#">Shop</a></li>
		  <li><a href="#">Media</a></li>
		  <li><a href="#">Features</a></li>
		  <li><a href="#">About Us</a></li>
		  <li><a href="contact.html">Contact Us</a></li>
		</ul>
		<p class="copy">Copyright&copy; 2015 Template by <a href="http://w3layouts.com" target="_blank"> w3layouts</a></p>
	</div>
</div>
</body>
</html>		