<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="sort1.js"></script>
<link rel="stylesheet" href="display.css">

<div class="container">
<div class="main">
<div class="header">
<h3 style="color:blue">BOARD OF INTERMEDIATE AND SECONDARY EDUCATION, COMILLA</h3>
<H5>BANGLADESH</H5><br>
<h4>Secondary School Certificate Examination 2021</h4>
</div>



<div class="name_student">
    
    
    <h5>Name of Institution</h5>
  <h3><a href="mark_entry.php?">New User Regisition form </a></h3>
 

 
  
  
<form action="" method="post">
<button  onclick="sortTable()">Sort</button>

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
 $serial_number = 1;
$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error()); 
}

$query = "SELECT * FROM mark_table ORDER BY total_mark DESC";

$result = mysqli_query($connection,$query);
$count = mysqli_num_rows($result);

if(isset($_REQUEST['search'])){


$recv_name = $_REQUEST['search_name'];

$query  = "SELECT * FROM mark_table WHERE class LIKE '%$recv_name%' ORDER BY total_mark DESC"; 

$result = mysqli_query($connection,$query);





  ?>


 
    <table class="table" id="myTable">
    <thead class="thead-light">
      <tr style="text-align:center">
      <th>Serial No</th>
        <th>Student Name</th>
        <th>Class</th>
        <th>Bangla Mark</th>
        <th>English Mark</th>
        <th>Math Mark</th>
        <th>Science Mark</th>
        <th>BOB Mark</th>
        <th>Religion Mark</th>
        <th>Total Mark</th>
        <Th>GPA</Th>
        <th>Grade</th>
        <th>action</th>
       
      </tr>
    </thead>

<?php
$serial_number = 1;
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
            $serial = $serial_number++;
           
        ?>
 <tbody>
      <tr style="text-align:center">
      <td><?php echo $db_id;?></td>
        <td><?php echo $name; ?></td>
        <td><?php echo $class;?></td>
        <td><?php echo $bangla ?></td>
        <td><?php echo $english; ?></td>       
        <td><?php echo $math?></td> 
        <td><?php echo $science; ?></td> 
        <td><?php echo $bob; ?></td>
        <td><?php echo $religion; ?></td>
        <td><?php $total= $bangla + $english + $math + $science + $bob + $religion;
                  echo $total;?>
             </td>
        
        <td><?php require 'bangla_gpa1.php'; 
                  require "english_gpa1.php";
                  require "math_gpa1.php";
                  require "science_gpa1.php";
                  require "bob_gpa1.php";
                  require "religion_gpa1.php";
 
             $z = $b + $e + $m + $bo + $s + $r;
            $g = $z / 6;
            if($bangla && $english && $math && $bob && $science && $religion >32){
                echo round ($g, 2);
            }else{
              echo "00";
            }
                ?>
        </td> 
        <td>
                <?php
                 include "grade.php";
                ?>
        </td> <?php
        echo $serial_number++;
        ?>
         <td>
          
  
       
       <td style="text-align:center"><a onclick="return confirm('Are you Confirm edit information?')" href="edit_data.php?edit_id=<?php echo $db_id?>">edit</a></td>
                
              
              
           </td>
       
      
      </tr>
      
    </tbody>
    <?php
       
      }
    }
  
  
  

?>

</table>
</div>


      


       
  
    

