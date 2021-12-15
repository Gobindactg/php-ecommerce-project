<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/edit_mark1.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div><a href="mark_entry.php">ADD Mark</a> || <a href="edit_mark.php">edit Mark</a></div>
<form action="mark_update.php" method="post">
<table class="table">
    <thead class="thead-light">
        <tr>
           <th>mark_id</th>
            <th>Roll</th>
            <th>Bangla</th>
            <th>English</th>
            <th>Math </th>
            <th>Science </th>
            <th>Bob</th>
            <th>religion </th>
            <th>Music</th>
            <th>Social </th>
            <th>Expressive </th>
            
        </tr>
    </thead>

    <?php
          $connection = mysqli_connect('localhost','root','','user_info');

          if(!$connection){
              die("Not connected". mysqli_error()); 
          }
          if(isset($_REQUEST['mark_id'])){

            $get_id = $_REQUEST['mark_id'];
           
            $get_info = "SELECT * FROM mark_table WHERE mark_id = $get_id";
                   
                     
           $update_info = mysqli_query($connection,$get_info);
          
           while( $row= mysqli_fetch_assoc($update_info)){
           

              
              ?>
    <tbody>
        <tr class="edit">
            <td><input type="number" name="" value="<?php echo $row['mark_id']?>"></td>
            <td><input type="number" name="st_roll" value="<?php echo $row['student_roll']?>"></td>
            <td><input type="number" name="bangla_mark" value="<?php echo $row['bangla_mark']?>"></td>
            <td><input type="number" name="english_mark" value="<?php echo $row['english_mark']?>"></td>
            <td><input type="number" name="math_mark" value="<?php echo $row['math_mark']?>"></td>
            <td><input type="number" name="science_mark" value="<?php echo $row['science_mark']?>"></td>
            <td><input type="number" name="bob_mark" value="<?php echo $row['bob_mark']?>"></td>
            <td><input type="number" name="religion_mark" value="<?php echo $row['religion_mark']?>"></td>
            <td><input type="number" name="music_mark" value="<?php echo $row['music_mark']?>"></td>
            <td><input type="number" name="social_mark" value="<?php echo $row['social_mark']?>"></td>
            <td><input type="number" name="expressive_mark" value="<?php echo $row['expressive_mark']?>"></td>
           
           
        </tr>
       
    </tbody>
    <?php
            }
        }
    ?>
    
</table>
    <div>
        <div class="form-group row" style="padding-left: 2%; ">
           <div class="submit" >
        
              <input  type="submit"  name="mark_update" value="Submit" placeholder="submit">
              <input type="hidden" name="updating_hidden_id" value="<?php echo $get_id; ?>">
           </div>
    </div>
</div>
</form>
</body>
</html>
