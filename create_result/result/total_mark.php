
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="sort1.js"></script>
<link rel="stylesheet" href="display.css">









 

 
 
  



<?php

         
          $connection = mysqli_connect('localhost','root','','user_info');

         

          $query = "SELECT * FROM mark_table ORDER BY gpa DESC";

          $result = mysqli_query($connection,$query);

          $count = mysqli_num_rows($result);


       
              
  ?>


 
    <table class="table" id="myTable">
    <thead class="thead-light">
      <tr style="text-align:center">
      <th>Serial No</th> <th>Student Name</th> <th>Class</th> <th>Bangla Mark</th><th>English Mark</th> <th>Math Mark</th> <th>Science Mark</th> <th>BOB Mark</th><th>Religion Mark</th><th>Total Mark</th><Th>GPA</Th> <th>Grade</th>  <th>Merit</th>
       
      </tr>
    </thead>

<?php



while ($row = mysqli_fetch_assoc($result)){
            $db_id = $row['id'];
            $class = $row['class'];
            $name = $row['student_name'];
            $class = $row['class'];
            $bangla = $row['bangla_mark'];
            $english = $row['english_mark'];
            $math = $row['math_mark'];
            $science = $row['science'];
            $bob = $row['bob'];
            $religion = $row['religion'];
            $total = $row['total_mark'];
            $gpa = $row['gpa'];
            include "bangla_gpa.php";
            include "english_gpa.php";
            include "math_gpa.php";
            include "science_gpa.php";
            include "bob_gpa.php";
            include "religion_gpa.php";
            if($bangla> 32 && $english> 32 && $math> 32 && $science> 32 && $bob> 32 && $religion> 32){
              $z = $b + $e + $m + $bo + $s + $r;
              $g = $z / 6;}
              else{ 
                $g = 0;
              }
             
              $total = (int)$bangla+ (int)$english + (int)$math + (int)$science + (int)$bob + (int)$religion;
        ?>
 
    <?php
       
      }
   
  
  
  

?>


</table>
</div>


      


       
  
    

