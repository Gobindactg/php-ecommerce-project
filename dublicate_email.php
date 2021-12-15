<div style=" text-align: center; padding: 100px;"> 
<form method="post" action="">
  <input type="email" name="user_email" placeholder="Your Email">
  <input type="submit" name="submit" value="submit">
</form>
<?php 
       $connection = mysqli_connect('localhost','root','','user_info');
       if(!$connection){
           die("Not connected". mysqli_error()); 
       }

if(isset($_POST['submit'])){
       $user_email=$_POST['user_email'];
       $query="SELECT COUNT(user_email) user_email FROM user_table1 WHERE user_email='$user_email'";
       $result = mysqli_query($connection,$query);
    
       while($count = mysqli_fetch_assoc($result)){
           $count = $count['user_email'];
 
       if ($count==0) {
         $query_insert="INSERT INTO user_table1 (user_email) VALUES ('$user_email')";
         $final_result = mysqli_query($connection, $query_insert);
         echo "<h3 style='color:Green;'>Email Added Successfully</h3>";
       }
       else {
         echo "<h3 style='color:red;'>Sorry! Email Already Exist!</h3>";
       }
    
    }

}
   
?>
</div>