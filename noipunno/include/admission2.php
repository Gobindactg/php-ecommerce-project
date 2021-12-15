<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../ss/admission3.css">
</head>
<body>
    <div class="container">
      <div class="header_button"><a href="admission.php"><h6>Back Home</h6></a></div>
      <div class="header"><h2>Student Information Form</h2></div>
      <h3 style="text-align:center; color:black;"> Please Fill Up Below Information for Student Admission</h3>
     
        <hr><hr>
        <?php
              if(isset($_REQUEST['submit3'])){
                $student_class = $_REQUEST['class'];
                $class_group = $_REQUEST['group'];
                $academy_year = $_REQUEST['year'];
                $section = $_REQUEST['section'];
              }

              if(isset($_REQUEST['submit'])){
                $student_roll =  $_POST['roll'];
                $student_name =  $_POST['stname'];
               
                $father_name =  $_POST['fname'];
                $mother_name =  $_POST['mname'];
                $gender = $_POST['gender'];
                $religion = $_POST['religion'];
                $birth_number = $_POST['birth_number'];
                $fnid =  $_POST['fnid'];
                $mnid =  $_POST['mnid'];
                $village =  $_POST['village'];
                $upazila = $_POST['upazila'];
                $district =  $_POST['district'];
                $mobile_number = $_POST['mobile_number'];
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
              
               $query = " INSERT INTO student_info(student_roll, student_name, student_class, class_group, academy_year, section, father_name, mother_name, gender, religion, birth_number, fnid, mnid, village, upazila, district, mobile_number, user_picture) VALUES ('$student_roll', '$student_name', '$student_class', '$class_group', '$academy_year', '$section', '$father_name', '$mother_name', '$gender', '$religion', '$birth_number', '$fnid', '$mnid', '$village', '$upazila', '$district', '$mobile_number', '$image_name')";
              
                 if(mysqli_query($connection, $query)){
                
                  }else{
                      die("query problem". myquli_error($connection));
                  }
              }


                  ?>
                                    
                 
             
              
          

     <form action="" method="post" enctype="multipart/form-data">
     
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label"  >Roll</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputEmail3" name="roll" placeholder="Student Roll" required>
          </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label"  >Student Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  name="stname" placeholder="Student name" required>
            </div>
          </div>
         
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Father Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="fname" placeholder="Your Father Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Mother Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="mname" placeholder="Your Mother Name">
            </div>
          </div>
          
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-10">
                <select style="width: 100%;" name="gender" id="" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Religion</label>
            <div class="col-sm-10">
                <select style="width: 100%;" name="religion" id="" required>
                    <option value="">Select Religion</option>
                    <option value="islam">Islam</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddist">buddist</option>
                </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Date of birth number</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputEmail3" name="birth_number" placeholder="Your Birth Registision Number">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Fathers NID</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputEmail3" name="fnid" placeholder="Father NID Number">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Mothers NID</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputEmail3" name="mnid" placeholder="Mother NID Number">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Village</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="village" placeholder="Your  Village Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Upazila</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="upazila" placeholder="Your Upazila Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">District</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputEmail3" name="district" placeholder="Your District Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Mobile Number</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputEmail3" name="mobile_number" placeholder="Mobile Number">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Profile Picture</label>
             
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
          <div style="padding:5px">
            <h5 style="text-align: center; color: green;">All Copy right by Noipunno Digital</h5>
          </div>
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