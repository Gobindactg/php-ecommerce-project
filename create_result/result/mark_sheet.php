<link rel="stylesheet" href="mark_sheet2.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php
  $connection = mysqli_connect('localhost','root','','user_info');

  if(!$connection){
      die("Not connected". mysqli_error()); 
  }
  
  $query = "SELECT * FROM mark_table ORDER BY total_mark DESC";
  
  $result = mysqli_query($connection,$query);



  
  ?>
 
 <form action="" method="post">
<button class="print" onclick=window.print()>print</button>

    <select class="option" name="search_name" id="">
            <option value="">select</option>
            <option value="one">one</option>
            <option value="two">two</option>
            <option value="three">three</option>
            <option value="four">four</option>
            <option value="five">five</option>

            <input class="buttons" type="submit" name="search">
                    

        </select>
    </form>
<?php    
    if(isset($_REQUEST['search'])){


$recv_name = $_REQUEST['search_name'];

$query  = "SELECT * FROM mark_table WHERE class LIKE '%$recv_name%' ORDER BY gpa DESC"; 


$result = mysqli_query($connection,$query);




?>

<?php

$serial_number = 1;

while ($row = mysqli_fetch_assoc($result)){
            $db_id = $row['id'];
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
            


          
?>
<?php
include "gpa_cal.php";



?>


<div class="main">
<div class="header">
<h3 style="color:blue">BOARD OF INTERMEDIATE AND SECONDARY EDUCATION, COMILLA</h3>
<H5>BANGLADESH</H5><br>
<h4>Secondary School Certificate Examination 2021</h4>
</div>
<div class="name_student">
    <h5>Name of Student: <?php echo $name; ?></h5>
    <h5>Father's Name</h5>
    <h5>Mother's Name</h5>
    <h5>Name of Institution</h5>


    <table class="table table-striped" >
  <thead class="thead">
    <tr class="thead">
      <th class="subject">Subject Name</th>
      <th>Obtain Mark</th>
      <th>Obtain Grade</th>
      <th>Obtain GPA</th>
     
    </tr>
  </thead>
  <tbody class="tbody">
    <tr>
      <td>
          <tr  class="tdbody">
          <td class="subject">Bangla</td>
          <td><?php echo $bangla ?></td>
          <td><?php echo $bgpa;?></td>
          <td><?php echo $bg ?></td>
          
          </tr>
          <tr class="tdbody">
          <td class="subject">English</td>
          <td><?php echo $english; ?></td>
          <td><?php echo $egpa; ?>  </td>
          <td><?php echo $egrade;?></td>
          </tr>
          <tr class="tdbody">
          <td class="subject">Math</td>
          <td><?php echo $math?></td>
          <td><?php echo $mgpa;?></td>
          <td><?php echo $mgrade;?></td>
         
          </tr>
          <tr class="tdbody">
          <td class="subject">Science</td>
          <td><?php echo $science; ?></td>
          <td><?php echo $sgpa; ?></td>
          <td><?php echo $sgrade;?></td>
                                         
          </tr>
          <tr class="tdbody">
          <td class="subject">Bangladesh And Global Study</td>
          <td><?php echo $bob; ?></td>
          <td><?php echo $bobgpa;?></td>
          <td><?php echo $bobgrade;?></td>
         
         
          </tr>
              <tr class="tdbody">
              <td class="subject">Religion</td>
              <td><?php echo $religion; ?></td>
              <td> <?php echo $rgpa;?></td>
              <td> <?php echo $rgrade; ?></td>
              
              
          </tr>
       
          
         
          </tr>
      </td>
      <tr class="tdbody">
              <td>Total Mark</td>  
              <td style=" color:green"><?php echo $total;?></td> 
              <td>GPA</td> 
              <td>  <?php echo round ($gpa, 2); ?></td> 
            
              
      </tr>
      <tr class="tdbody">
              
              <td>Grade</td> 
              <td>  <?php include "grade.php"; echo $grade;?>  </td> 
                <td style="font-size:40px color:black">Merit</td> 
              <td> <?php echo $serial_number++;?></td>
              
      </tr>
      
    </tr>
  </tbody>
</table>

<table>
  <tbody class="result">
   
  </tbody>
</table>
<?php

?>

<?php
}
}
?>

</div>