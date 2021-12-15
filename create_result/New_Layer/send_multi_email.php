<?php
session_start();



?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="mail1.css">
<body class="body"> 
<div class="container2">
 

<?php

$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error()); 
}
$query = "SELECT * FROM login_table";
$result = mysqli_query($connection, $query);

$row_count = mysqli_num_rows($result);
if($row_count >0){

?>
<form action="send_multi_email_connection.php" method="post">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        
        <h3 style="color: green">Send Email Multi User By Selection From DB</h3>
        <Div class="write">
          <h5>Write Email Subject</h5>
          <input type="text" name="header"><br>
         
        </Div>
        <Div class="write2">
          <h5>Write Something to send email </h5>
          <input type="text" name="body">
        </Div>
        <th> DB ID</th>
        <th>Email</th>
        <th><input type="submit" class="btn btn-success" name="send_mail" value="Send Multi Email"><th>
      </tr>
    </thead>

     
    <?php
       
    while($row = mysqli_fetch_assoc($result)){

      $db_id = $row['id'];
      $email = $row['user_email'];

    ?>
   <tbody>
     <tr>
       <td><?php echo $db_id; ?></td>
       <td><?php echo $email; ?></td>
       <td> <center><input type="checkbox" name="check_data[]" value="<?php echo $db_id ?>"></center> </td>
     </tr>
   </tbody>
  
  
<?php
    }
  }else{
    echo "You don't have any data in your database";
  }
  

?>
 </table>
</form>
   </div>
</body>
