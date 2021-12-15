<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require "application.php";
 ob_start();
	session_start();
	if(isset($_SESSION['admin_id'])){
		$admin_id = $_SESSION['admin_id'];
		if(!$admin_id = NULL){
			header('location:admin/admin_master.php');
		}
	}
	if(isset($_GET['logout'])){
		require 'admin/function.php';
		user_logout();
	}

?>


<!DOCTYPE HTML>
<html>
<head>
<title>TODAYSHOP || Home</title>
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



<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>


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
			 		<li class="active"><a  href="customer_cart_content.php"> <span style="color:yellow; font-size:15px; font-weight:600;"><?php  if(isset($_SESSION['account_name'])){ echo "$_SESSION[account_name]";}?></span></a></li>	
			 		<li class="active"><a  href="?logout"><span style="color:red; font-size:15px"><?php  if(isset($_SESSION['account_name'])){ echo "Logout";}?></span> </a></li>
					 <li><a href="checkout.php">User Log In</a></li> 
					 <li><a href="admin_login.php">Log In</a></li> 
					<li><a href="checkout.php">Sign Up</a></li>
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
			<div class="logo" >
				<a  href="index.php"><h2 style="color:green; font-style:italic;, font-family:tahoma; font-size:35px"> TODAY<span style="color:red; font-style:italic;, font-family:tahoma; font-size:35px">SHOP</span></h2></a>
			</div>
			<ul class="clock" style="padding-left:20px">
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
	  			<a href="cart_content.php"><i class="bag_left"> </i></a>
	  			<a href="#"><li class="bag_right"><p style="color:yellow; font-weight:600;">tk.<?php if(isset($_SESSION['g_total'])){ echo $_SESSION['g_total'];}?></p> </li></a>
	  			<div class="clearfix"> </div>
	  		</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
</div>
<?php

$query_result = veiw_navbar_info();
if(isset($_GET['content_id'])){
	$content_id = $_GET['content_id'];
	
}

?>
<div class="menu">
	<div class="container">
		<div class="menu_box ">
	     <ul class="megamenu skyblue">
			<li ><a class="color2" href="index.php">Home</a></li>
			<?php $active= ''; while($rows=mysqli_fetch_assoc($query_result)){ 
				
				if(isset($_GET['content_id'])){
				if($rows['content_id'] == $content_id){
					$active = 'active grid';
					
				}else{
					$active = '';
				}
			}
				?>
				
			<li class="<?php echo $active; ?>"><a  class="color4" href="content_category.php?<?php echo $rows['content_name']?>&&content_id=<?php echo $rows['content_id']?>"><?php echo $rows['content_name'];?></a></li>				
			
		
			<?php	}?>			
			
			<div class="clearfix"> </div>
		 </ul>
	  </div>
</div>
</div>
<div class="index_slider">
	<div class="container">
		<?php
		if(isset($bitm)){
			if($bitm == 'men'){
				include "include/men.php";
			}
			if($bitm == 'blog'){
				include "include/display_blog.php";

			}
			if($bitm == 'single'){
				include "include/single.php";
			}
			if($bitm == 'registation'){
				include "include/registation.php";
			}
			if($bitm == 'create_blog'){
				include "include/create_blog.php";
			}
			if($bitm == 'edit_blog'){
				include "include/blog_edit.php";
			}
			if($bitm == 'admin_login'){
				include "include/admin_login.php";
			}
			if($bitm == 'user_login'){
				include "include/user_login.php";
			}
			if($bitm == 'user_blog'){
				include "include/user_display_blog.php";
			}
			if($bitm == 'user_profile'){
				include "include/user_profile.php";
			}
			if($bitm == 'single_product'){
				include "include/single_product.php";
			}
			if($bitm == 'cart'){
				include "include/cart_content.php";
			}
			if($bitm == 'checkout'){
				include "include/checkout.php";
			}
			if($bitm == 'shipping'){
				include "include/shipping.php";
			}
			if($bitm == 'payment'){
				include "include/payment.php";
			}
			if($bitm == 'customer_home'){
				include "include/customer_home.php";
			}
			if($bitm == 'customer_cart_content'){
				include "include/customer_cart_content.php";
			}
			if($bitm == 'invoice'){
				include "include/invoice.php";
			}
			if(isset($_GET['HomeApplince'])){
				
				if($bitm == 'content_category'){
					
					include "include/content_homeappliance.php";
					}
				}
			if(isset($_GET['Mobile'])){
				
				if($bitm == 'content_category'){
						
					include "include/content_mobile.php";
					}
				}
			if(isset($_GET['Electronic'])){
			
				if($bitm == 'content_category'){
						
					include "include/content_electronic.php";
					}
				}
				if(isset($_GET['Sports'])){
			
				if($bitm == 'content_category'){
						
					include "include/content_sports.php";
					}
				}
				if(isset($_GET['Blog'])){
			
					if($bitm == 'content_category'){
							
						include "include/display_blog.php";
						}
					}
				if(isset($_GET['Create_Blog'])){
			
					if($bitm == 'content_category'){
								
						include "include/create_blog.php";
						}
					}
					
		
		}else{

		include "include/home.php";
			}
		?>
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
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
</body>
</html>	
	