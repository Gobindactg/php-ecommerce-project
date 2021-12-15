<link rel="stylesheet" href="tabulation.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
  $connection = mysqli_connect('localhost','root','','user_info');

  if(!$connection){
      die("Not connected". mysqli_error()); 
  }
  
  $query = "SELECT * FROM mark_table";
  
  $result = mysqli_query($connection,$query);
  ?>
 

 <div class="main">
<div class="header">
<h3 style="color:blue">BOARD OF INTERMEDIATE AND SECONDARY EDUCATION, COMILLA</h3>
<H5>BANGLADESH</H5><br>
<h4>Secondary School Certificate Examination 2021</h4>
</div>
<div class="name_student">
    
    
    <h5>Name of Institution</h5>

<table class="table table-bordered">
  <thead class="thead">
    <tr class="thead">
        <th>Serial No</th>
        <th>Student Name</th>
        <th>Bangla Mark</th>
        <th>English Mark</th>
        <th>Math Mark</th>
        <th>Science Mark</th>
        <th>BOB Mark</th>
        <th>Religion Mark</th>
        <Th>GPA</Th>
        <th>Grade</th>
        <th>Merit</th>
      </tr>
  </thead>
  </table>
  <?php


/*while ($row = mysqli_fetch_assoc($result)){
            $db_id = $row['id'];
            $name = $row['student_name'];
            $class = $row['class'];
            $bangla = $row['bangla_mark'];
            $english = $row['english_mark'];
            $math = $row['math_mark'];
            $science = $row['science'];
            $bob = $row['bob'];
            $religion = $row['religion'];
       


          
?>*/




   <tbody class="tbody">
    <tr class="tdbody">
        <td><?php echo $db_id;?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $bangla ?></td>
        <td><?php echo $english; ?></td>       
        <td><?php echo $math?></td> 
        <td><?php echo $science; ?></td> 
        <td><?php echo $bob; ?></td>
        <td><?php echo $religion; ?></td>
        
        <td><?php require 'bangla_gpa1.php'; 
                  require "english_gpa1.php";
                  require "math_gpa1.php";
                  require "science_gpa1.php";
                  require "bob_gpa1.php";
                  require "religion_gpa1.php";
 
             $z = $b + $e + $m + $bo + $s + $r;
            $g = $z / 6;
                
                echo round ($g, 2);
                
                ?>
        </td> 
        <td>
                <?php
                 include "grade.php";
                ?>
        </td> 
          
         <td>02</td>
      
    </tr>
  </tbody>-->
</table>



<?php
}

?>

</div>