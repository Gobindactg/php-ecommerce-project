<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/instution1.css">
</head>
<body>
    <div class="container">
      <div class="header_button"><a href="../index.php"><h6>Back Home</h6></a></div>
      
      <h3 style="text-align:center; color:black;"> Please Fill Up Below Institution Information</h3>
     
        <hr><hr>
        <?php
           
              if(isset($_REQUEST['submit'])){
                $ins_name =  $_POST['insname'];
                $ins_address =  $_POST['insaddress'];
               
                $ins_catagory =  $_POST['inscatagory'];
                $ins_head =  $_POST['inshead'];
                $ins_mobile = $_POST['insmobile_number'];
              
                $rec_file = $_FILES['upload_image'];
                $image_name = $rec_file['name'];
                $image_tmp_name = $rec_file['tmp_name'];
                if(!empty($image_name)){

                    $loc = "images/";
                    if(move_uploaded_file($image_tmp_name, $loc.$image_name)){
                    // header("location: admission2.php");
                    }else{
                      echo " Your File is empty";
                    }
      
              }
              
               $connection = mysqli_connect('localhost','root','','user_info');
              if(!$connection){
                    die("Database Not connected". mysqli_error()); 
                  }
              
               $query = " INSERT INTO institution_table(ins_name, ins_address, ins_catagory, ins_head, ins_mobile, ins_logo) VALUES ('$ins_name', '$ins_address', '$ins_catagory', '$ins_head', '$ins_mobile', '$image_name')";
              
                 if(mysqli_query($connection, $query)){
                
                  }else{
                      die("query problem". myquli_error($connection));
                  }
              }


                  ?>
                                    
                 
             
              
          

     <form action="" method="post" enctype="multipart/form-data">
     
        
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"  >Instution Name</label><br>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="insname" placeholder="Instution Name" required>
            </div>
          </div>
         
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Instution Address</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="insaddress" placeholder="Instution Address" required>
            </div>
          </div>
       
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Instution Catagory</label>
            <div class="col-sm-10">
                <select style="width: 50%;" name="inscatagory" id="" required>
                    <option value="">Select Catagory</option>
                    <option value="kg">KG</option>
                    <option value="primary">Primary</option>
                    <option value="secondary">Secondary</option>
                    <option value="collage">Collage</option>
                </select>
            </div>
          </div>
        
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Head Teacher/<br>Principle Name</label>
            <div style="padding-top:12px" class="col-sm-10">
              <input  type="text" class="form-control" id="inputEmail3" name="inshead" placeholder="Head Teacher/Principle Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Instution Mobile Number</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputEmail3" name="insmobile_number" placeholder="Instution Mobile Number">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Instution Logo</label>
             
           <div class="col-sm-8">
             
             <input type="file" id="image" name="upload_image" value="upload" accept="image/*" onchange="loadFile(event)">  
            
              <div>
                <img style="width:150px; height:150px;" id="output"/>
              </div>
              
            </div>
          </div>
          <div class="form-group row" style="padding-left: 18%; ">
            
            <div class="submit" >
              <input onclick=  "return confirm('Are you Confirm submit Your information?')" type="submit"  name="submit" value="Submit" placeholder="Email">
            </div>
          </div>
          <hr><hr>
        
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
</body>
</html>