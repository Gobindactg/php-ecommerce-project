
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/admission.css">
</head>
<body>

  <?php


    if(isset($_REQUEST['submit3'])){
      $student_class = $_REQUEST['class'];
      $class_group = $_REQUEST['class_group'];
      $academy_year = $_REQUEST['year'];
      $section = $_REQUEST['section'];
    }

  if(isset($_POST['submit'])){
         
      $student_roll =  $_POST['st_roll'];
      $bangla =  $_POST['bangla_mark'];
      $english =  $_POST['english_mark'];
      $math =  $_POST['math_mark'];
      $science = $_POST['science_mark'];
      $bob = $_POST['bob_mark'];
      $religion = $_POST['religion_mark'];
      $music =  $_POST['music_mark'];
      $social =  $_POST['social_mark'];
      $expressive =  $_POST['expressive_mark'];
  
  
      
  $connection = mysqli_connect('localhost','root','','user_info');
  if(!$connection){
        die("Database Not connected". mysqli_error()); 
      }
  
    $query = "INSERT INTO mark_table (student_roll, student_class, class_group, academy_year, section, bangla_mark, english_mark, math_mark, science_mark, bob_mark, religion_mark, music_mark, social_mark, expressive_mark) VALUES ('$student_roll','$student_class','$class_group','$academy_year','$section','$bangla','$english','$math','$science','$bob','$religion','$music','$social','$expressive')";
    
      if(mysqli_query($connection, $query)){
        
      }else{
          die("query problem". myquli_error($connection));
      }
  
      
      
      
  }

 ?>

    <div class="container">
        <h2 style="text-align:center; color:green;">Student Mark Entry</h2>
        <div>
        <!--  <a href="mark_show2.php">mark detail</a> || <a href="edit_mark.php">edit mark</a>-->
        </div>
  <form action="" method="post">
                
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Roll</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="st_roll" placeholder="Student Roll" required>
          </div>
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Bangla</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputEmail3" name="bangla_mark" placeholder="bangla Mark">
            </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">English</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputEmail3" name="english_mark" placeholder="English Mark">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Math</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputEmail3" name="math_mark" placeholder="math Mark">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Science</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputEmail3" name="science_mark" placeholder="Science Mark">
          </div>
         </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Bangladesh and Global Study</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputEmail3" name="bob_mark" placeholder="Bangladesh and Global Study Mark">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Religion</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputEmail3" name="religion_mark" placeholder="religion Mark">
          </div>
        </div>
          <hr>
          <h5 style="text-align: center;"> Additional Subject : </h5>
          <hr>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Music</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputEmail3" name="music_mark" placeholder="Music Mark">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Social Study</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputEmail3" name="social_mark" placeholder="Social study Mark">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Expressive Art</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputEmail3" name="expressive_mark" placeholder="Expressive Art Mark">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Total Mark</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputEmail3" name="total_mark" placeholder="Total Mark">
          </div>
        </div>

        
          <div class="form-group row" style="padding-left: 18%; ">
            
            <div class="submit" >
              <input  type="submit"  name="submit" value="Submit" placeholder="submit">
            </div>
          </div>
          <hr><hr>
          <div style="padding:5px">
            <h5 style="text-align: center; color: green;">All Copy right by Noipunno Digital</h5>
          </div>
    </div>
  </form>

</body>
</html>