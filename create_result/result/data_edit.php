
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

   
<div>
<button type="button" class="btn btn-outline-success" onclick=window.print()>print</button>
     <select class="option" name="search_name" >
            <option value="">select</option>
            <option value="one">one</option>
            <option value="two">two</option>
            <option value="three">three</option>
            <option value="four">four</option>
            <option value="five">five</option>
       </select>
       <button type="button" class="btn btn-outline-success"> <input type="submit" name="search"></button>
       <button type="button" class="btn btn-outline-success"><a href="data_edit.php">Edit Data</a></button>   
       <button type="button" class="btn btn-outline-danger"><a href="display.php"> close </a></button>
       </div>
      
      
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

       }
  ?>
 
    <table class="table">
    <thead class="thead-light">
      <tr style="text-align:center">
      <th> Serial No </th> 
      <th> Student Name </th> 
      <th> Class </th> 
      <th> Bangla Mark </th>
      <th> English Mark </th>
       <th> Math Mark </th> 
       <th> Science Mark </th>
        <th> BOB Mark </th>
        <th> religion Mark </th>
        <th>Action</th>
     
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
        
          
          
        <<td style="text-align:center"><a onclick="return confirm('Are you Confirm edit information?')" href="edit_data.php?edit_id=<?php echo $db_id?>">edit</a> ||  <a onclick="return confirm('Are you Confirm delete information?')" href="delete.php?id=<?php echo $db_id ?>">Delete</a></td>
            
       
      
      </tr>
      
    </tbody>
    <?php
       
      }
   
  
  
  

?>

</table>
</div>


      


       
  
    

