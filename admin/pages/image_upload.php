
<?php
   
    if(isset($_POST['image'])){
    $image_title =$_POST['image_name'];
    $directory='product_image/';
    $target_file=$directory.$_FILES['upload_image']['name'];
    $file_type=pathinfo($target_file, PATHINFO_EXTENSION);
   // echo 'file type is :'.$file_type;
    //echo '<br>';
    $file_size = $_FILES['upload_image']['size'];
    //echo 'file size is :'.$file_size;
  //  echo '<br>';
    $check = getimagesize($_FILES['upload_image']['tmp_name']);
    //echo '<pre>';
    //print_r($check);
   ?>
<div class="container">
   <h3 style="color:yellow; font-family:tahoma; font-weight:600; background-color:teal; height:30px; padding-top:15px; padding-left:10px;"><?php if($check){
        if(file_exists($target_file)){
            echo 'This image is already exists! Please try again later';
            }else{
                if($file_type !='jpg' && $file_type !='png'){
                    echo "Your file type is not valid! Please try again";
                }else{
                    if($file_size> 512000){
                        echo " Your file Size is Too larges! Please tyy again";
                    }else{
                        move_uploaded_file($_FILES['upload_image']['tmp_name'], $target_file);
                        $connection = mysqli_connect('localhost','root','','user_info');
                        if(!$connection){
                            die("Not connected". mysqli_error()); 
                        }
                        $query = "INSERT INTO image_table (image_name, upload_image) VALUES ('$image_title', '$target_file')";
                        $result = mysqli_query($connection,$query);
                        echo "Your image upload and save successfully";
                    }
                }
            }
    }else{
        echo "Your upload file is not an image!. Please try again";
    }
    
    
    ?></h3></div>
    <?php
}
    //move_uploaded_file($_FILES['upload_image']['tmp_name'], $target_file);

            
      /*    if(isset($_POST['image'])){
                
                  $image_title = $_POST['image_name'];
                  $rec_file = $_FILES['upload_image'];
                  $image_name = $rec_file['name'];
                  $image_tmp_name = $rec_file['tmp_name'];
                  $directory='product_image/';
                  $target_file=$directory.$_FILES['product_image']['name'];
                  $file_type=pathinfo($target_file, PATHINFO_EXTENSION);
                /*  if(!empty($image_name)){
                      $loc = "product_image/";
                      if(move_uploaded_file($image_tmp_name, $loc.$image_name)){
                        }else{
                        echo " Your File is empty";
                      }; 
        
                }
           
              $connection = mysqli_connect('localhost','root','','user_info');
              if(!$connection){
                  die("Not connected". mysqli_error()); 
              }
  
              
              $query = "INSERT INTO image_table (image_name, upload_image) VALUES ('$image_title', '$image_name')";
              //$query = "INSERT INTO admin_table(user_name, user_email, user_pass, user_address, user_about, picture) VALUES ('$admin_name', '$user_email', '$user_pass', '$user_address', '$user_about' '$image_name')";
              $result = mysqli_query($connection,$query);
              
              if($result){?>
                 <div class="container"><h3 style="color: green; font-style: italic;"><?php echo "Image Upload Successfully";?></h3></div> <?php
                // header("location: login_user.php?success");
                  }else{
                    echo "Data Insert Is Not Successfully";  
                  }
              }
              */
              
                      
              
              ?>
  
  





<div class="container" style="background-color:pink; padding-top:10px; padding-left:15px">
<form action="" method="post" enctype="multipart/form-data">
    <table style="padding:10px 10px">
        <tr style="padding:10px 10px">
            <td>Image Name</td>
            <td style="padding-left:25px"><input type="text" name="image_name"></td>
        </tr>
        <tr>
            <td>Image</td>
            <td style="padding-left:25px"><input type="file" name="upload_image"></td>
        </tr>
        <tr>
            <td></td>
            <td style="padding-top:25px"><input type="submit" name="image" value="Save"></td>
        </tr>
    </table>
</form>
</div>