
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admission.css">
</head>
<body>

  <?php
  
  if(isset($_POST['submit'])){
      
      function save_catagory_info($data){
  
      
  $connection = mysqli_connect('localhost','root','','user_info');
  if(!$connection){
        die("Database Not connected". mysqli_error()); 
      }
  
    $query = "INSERT INTO mark_table (student_roll, student_class, class_group, academy_year, section, bangla_mark, english_mark, math_mark, science_mark, bob_mark, religion_mark, music_mark, social_mark, expressive_mark) VALUES ('$data[st_roll]','$data[class]','$data[group]','$data[academy_year]','$data[section]','$data[bangla_mark]','$data[english_mark]','$data[math_mark]','$data[science_mark]','$data[bob_mark]','$data[religion_mark]','$data[music_mark]','$data[social_mark]','$data[expressive_mark]')";
    
      if(mysqli_query($connection, $query)){
          $message = "Catagory info save successfully";
          return $message;
      }else{
          die("query problem". myquli_error($connection));
      }
  }
  
      $done = save_catagory_info($_POST);
      
      
  }
// innerjoin code
  //SELECT student_info.student_name, mark_table.english_mark, mark_table.bangla_mark, mark_table.math_mark, mark_table.science_mark, mark_table.bob_mark FROM  student_info INNER JOIN mark_table on student_info.student_roll = mark_table.student_roll AND student_info.student_class = mark_table.student_class
  
 // SELECT student_info.student_roll, student_info.student_name, mark_table.english_mark, mark_table.bangla_mark, mark_table.math_mark, mark_table.science_mark, mark_table.bob_mark, mark_table.religion_mark, mark_table.music_mark,mark_table.social_mark, mark_table.expressive_mark FROM student_info INNER JOIN mark_table on student_info.student_roll = mark_table.student_roll AND student_info.student_class = mark_table.student_class;//
  ?>




    <div class="container">
        <h2>Student Mark Entry</h2>
        <div>
          <a href="mark_show2.php">mark detail</a> || <a href="edit_mark.php">edit mark</a>
        </div>
  <form action="" method="post">
      <table class="table table-hover" style="background-color: lightgrey;">
        <thead>
          <tr>
            <th scope="col">
              <div class="col-sm-10">
                <label for="inputEmail3" style="font-size: 20px; font-family: tahoma; font-weight: 600;" >Class</label>
                  <select style="width: 70%; " name="class" id="" value="<?php $data['class']?>" required>
                      <option value="">Select Class</option>
                      <option value="one">One</option>
                      <option value="two">Two</option>
                      <option value="three">Three</option>
                      <option value="four">Four</option>
                      <option value="five">Five</option>
                  </select>
              </div>
            </th>
            <th scope="col">
                             
                <div class="col-sm-10">
                  <label for="inputEmail3" style="font-size: 20px; font-family: tahoma; font-weight: 600;">Group</label>
                    <select  style="width: 65%;" name="group" id="">
                        <option value="nill">N/A</option>
                        <option value="science">Science</option>
                        <option value="commerce">Commerce</option>
                        <option value="arts">Arts</option>
                    </select>
                </div>
              
            </th>
            <th scope="col">
              <div class="col-sm-10">
                <label for="inputEmail3" style="font-size: 20px; font-family: tahoma; font-weight: 600;" >Year</label>
                  <select style="width: 60%;" name="academy_year" id="">
                       <option value="">select Year</option>
                      <option value="2021">2021</option>
                      <option value="2020">2020</option>
                      <option value="2019">2019</option>
                  </select>
              </div>
            
            </th>
            <th scope="col">
              <div >
                <label for="inputEmail3" style="font-size: 20px; font-family: tahoma; font-weight: 600;">Section</label>
                  <select style="width: 55%;" name="section" id="">
                      <option value="nill">N/A</option>
                      <option value="joba">Joba</option>
                      <option value="belly">Belly</option>
                  </select>
              </div>
            
            </th>
          </tr>
        </thead>
        
      </table>
        
        
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Roll</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" name="st_roll" placeholder="Student Roll" required>
          </div>
          
        </div>
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Bangla</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="bangla"   name="bangla_mark" placeholder="bangla Mark" oninput="myFunction()">
            </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">English</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="english"   name="english_mark" placeholder="English Mark" oninput="myFunction()">
          </div>
        </div>

       <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Math</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="math"   name="math_mark" placeholder="math Mark" oninput="myFunction()">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Science</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="science"  oninput="myFunction()" name="science_mark" placeholder="Science Mark">
          </div>
         </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Bangladesh and Global Study</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="bob"  oninput="myFunction()" name="bob_mark" placeholder="Bangladesh and Global Study Mark">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Religion</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="religion"  oninput="myFunction()" name="religion_mark" placeholder="religion Mark">
          </div>
        </div>
          <hr>
          <h5 style="text-align: center;"> Additional Subject : </h5>
          <hr>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Music</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="music"  oninput="myFunction()" name="music_mark" placeholder="Music Mark">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Social Study</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="social"  oninput="myFunction()" name="social_mark" placeholder="Social study Mark">
          </div>
        </div>

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Expressive Art</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="expressive" oninput="myFunction()"  name="expressive_mark" placeholder="Expressive Art Mark">
          </div>
        </div> 

        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Total Mark</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="total" name="total_mark" placeholder="Total Mark">
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

  <script>
        function myFunction() {
          var a = Number(document.getElementById("bangla").value);
          var b = Number(document.getElementById("english").value);
          var c = Number(document.getElementById("math").value);
          var d = Number(document.getElementById("science").value);
         var e = Number(document.getElementById("bob").value);
          var f = Number(document.getElementById("religion").value);
         var g = Number(document.getElementById("music").value);
          var h = Number(document.getElementById("social").value);
          var i = Number(document.getElementById("expressive").value);
        
          var total = +a + +b + +c + +d + +e + +f + +g + +h + +i;
          
        
          document.getElementById("total").value = total;

}
</script>


</body>
</html>