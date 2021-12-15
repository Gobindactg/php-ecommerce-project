<?php

if(isset($_POST['submit'])){
	require 'admin/function.php';
	user_login_check($_POST);
}
if(isset($_GET['logout'])){
    require 'admin/function.php';
    user_logout();
}

?>
<div class="register" style="padding-top:10px">
			   <div class="col-md-6 login-left">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="registation.php">Create an Account</a>
			   </div>
			   <div class="col-md-6 login-right">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p style="color:black;">If you have an account with us, please log in.</p>
				
				<form action="" method="post">
				  <div>
					  <?php if(isset($return)){
						  include 'admin/pages/function.php';
						  echo $message;
						  }
						  ?>
					 <span>Email Address<label>*</label></span>
					<input style="width: 100%; height: 40px;" type="email" name="email_address" placeholder="Type Your Email Address"> 
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input style="width: 100%; height: 40px;" type="password" name="user_pass" placeholder="Type Your Password"> 
				  </div>
				  <a class="forgot" href="#">Forgot Your Password?</a>
				  <input  type="submit" name="submit" value="Login">
			    </form>

			   </div>	
			   <div class="clearfix"> </div>
		</div>
	 </div>