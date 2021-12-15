<link rel="stylesheet" href="css/bootstrap.min.css">





<div class="container">
<table class="table">
   <thead class="thead-light">
        <tr>
             <th>Roll</th>
             <th>Student Name</th>
            <th>class</th>
            <th>Bangla</th>
            <th>English</th>
            <th>Math </th>
            <th>Science </th>
            <th>Bob</th>
            <th>religion </th>
            <th>Music</th>
            <th>Social </th>
            <th>Expressive </th>
        </tr>
    </thead>


    <?php
     
     
     $connection = mysqli_connect('localhost','root','','user_info');
 
      if(!$connection){
          die("Not connected". mysqli_error()); 
      }
 
         $query = "SELECT student_info.student_roll, student_info.student_name, student_info.student_class,mark_table.english_mark, mark_table.bangla_mark, mark_table.math_mark, mark_table.science_mark, mark_table.bob_mark, mark_table.religion_mark, mark_table.music_mark,mark_table.social_mark, mark_table.expressive_mark FROM student_info INNER JOIN mark_table on student_info.student_roll = mark_table.student_roll AND student_info.student_class = mark_table.student_class;";
         $result = mysqli_query($connection,$query);
         $count = mysqli_num_rows($result);
         while ($row = mysqli_fetch_assoc($result)){
         ?>
    <tbody class="thead-light">
        <tr>
            <td><?php echo $row['student_roll']?></td>
            <td><?php echo $row['student_name']?></td>
            <td><?php echo $row['student_class']?></td>
            <td><?php echo $row['bangla_mark']?></td>
            <td><?php echo $row['english_mark']?></td>
            <td><?php echo $row['math_mark']?></td>
            <td><?php echo $row['science_mark']?></td>
            <td><?php echo $row['bob_mark']?></td>
            <td><?php echo $row['religion_mark']?></td>
            <td><?php echo $row['music_mark']?></td>
            <td><?php echo $row['social_mark']?></td>
            <td><?php echo $row['expressive_mark']?></td>
            
        </tr>
    </tbody>
    <?php
         }
    ?>
</table>
</div>