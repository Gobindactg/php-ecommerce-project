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
<table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th>ID </th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Bangla Mark</th>
                    <th>English Mark</th>
                    <th>Math Mark</th>
                    <th>Science Mark</th>
                    <th> BOB Mark</th>
                    <th>Religion Mark</th>
                    <th>action</th>
                    <th>Action</th>
                  </tr>
                </thead>


<?php


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
          
?>

       
    <tbody>
        <tr>
            <td><?php echo $db_id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $class; ?></td>
            <td><?php echo $bangla;?></td>
            <td><?php echo $english;?></td>
            <td><?php echo $math;?></td>
            <td><?php echo $science;?></td>
            <td><?php echo $bob;?></td>
            <td><?php echo $religion;?></td>
            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
        </tr>
        </tbody>
        <?php
}
        ?>
</table>