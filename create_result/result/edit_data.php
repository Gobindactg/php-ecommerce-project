<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="edit_data1.css">




<?php


$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error()); 
}
if(isset($_REQUEST['edit_id'])){

$get_id = $_REQUEST['edit_id'];

$get_info = "SELECT * FROM mark_table WHERE id = $get_id";

$update_info = mysqli_query($connection,$get_info);

while( $row= mysqli_fetch_assoc($update_info)){
    
    ?>
<div class="container">
        <h2>Edit Your Submited Information</h2>
        <form action="data_update.php" method="post">
          
            <table class="table">
            <thead class="thead-dark">
                    <tr>      
                        <th>Student Name</th>
                        <th>Class</th>
                        <th>Bangla Mark</th>
                        <th>English Mark</th>
                        <th>Math Mark</th>
                        <th>Science Mark</th>
                        <th>BOB Mark</th>
                        <th>Religion Mark</th>
                        
                    </tr>

             </thead>
             <tbody class="tbody">
                 <tr class="tbody"> 
                     <td><input type="text" name="uname" placeholder="Enter Your Name" value="<?php echo $row['student_name'];?> "></td>
                     
                     <td><input type="text" name="class" placeholder="Enter Your Name" value="<?php echo $row['class'];?> "></td>
                    
                     <td><input type="text" name="bangla" placeholder="Enter Your Name" value="<?php echo $row['bangla_mark'];?> "></td>
                    
                     <td><input type="text" name="english" placeholder="Enter Your Name" value="<?php echo $row['english_mark'];?> "></td>
                    
                     <td> <input type="text" name="math" placeholder="Enter Your Name" value="<?php echo $row['math_mark'];?> "></td>
                    
                     <td> <input type="text" name="science" placeholder="Enter Your Name" value="<?php echo $row['science'];?> "></td>
                
                    <td><input type="text" name="bob" placeholder="Enter Your Name" value="<?php echo $row['bob'];?> "></td>
                    
                    <td><input type="text" name="religion" placeholder="Enter Your Name" value="<?php echo $row['religion'];?> "></td>
                       
                         
            </tr>
          
                    <input type="hidden" name="updating_hidden_id" value="<?php echo $get_id; ?>"> <?php // this tag use for updating data in "data_update.php" to send hidden id?>
                    <input style="background-color:green; color:yellow; font-size:20px" type="submit" name="submit5" value="Update Data"><br><br>
              </tbody>
            </table>
        </form>
</div>
<?php


 }

}



?>