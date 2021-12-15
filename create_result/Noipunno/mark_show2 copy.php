<?php
           
           $connection = mysqli_connect('localhost','root','','user_info');
           if(!$connection){
               die("Not connected". mysqli_error()); 
           }
                   
           
           if(isset($_REQUEST['search'])){

               $recv_name = $_REQUEST['search_name'];
             
               $query  = "SELECT * FROM mark_table WHERE student_name LIKE '%$recv_name%'"; 
             
               $result = mysqli_query($connection,$query);


               $connection = mysqli_connect('localhost','root','','user_info');
               if(!$connection){
                   die("Not connected". mysqli_error()); 
               }
               $query = "SELECT * FROM mark_table";
               $result = mysqli_query($connection,$query);

?>

<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mark_show.css">
    <title>Document</title>

    <div class="container">                   
      <form action="" method="post">  
        
        
      </form> 
   
   
     <form action="" method="post">
    <table class="table">
   
        <input type="text" name="search_name" value="" placeholder="search">
        <input type="submit" name="search" value="search by Class">  
  
        <thead class="thead-light">
        <tr class="show">
            
            <th>Roll</th>
            <th>class</th>
            
            <th>Bangla</th>
            <th>English</th>
            <th>Math </th>
            <th>Science </th>
            <th>Bobk</th>
            <th>religion </th>
            <th>Music</th>
            <th>Social </th>
            <th>Expressive </th>
            <th>action</th>
        </tr>
    </thead>
   
     
        <?php

                while ($row = mysqli_fetch_assoc($result)){
                
                    $roll= $row['student_roll'];
                    $student_name= $row['student_class'];
                    $bangla = $row['bangla_mark'];
                    $english = $row['english_mark'];
                    $math = $row['math_mark'];
                    $science = $row['science_mark'];
                    $bob = $row['bob_mark'];
                    $religion = $row['religion_mark'];
                    $music = $row['music_mark'];
                    $social = $row['social_mark'];
                    $expressive = $row['expressive_mark'];
                    
      ?>
          
    <tbody class="thead-light">
        <tr>
           
            <td><?php echo $roll ?></td>
            <td><?php echo $student_name ?></td>
            <td><?php echo $bangla?></td>
            <td><?php echo $english?></dh>
            <td><?php echo $math?></td>
            <td><?php echo $science?></td>
            <td><?php echo $bob?></td>
            <td><?php echo $religion?> </td>
            <td><?php echo $music?></td>
            <td><?php echo $social?></td>
            <td><?php echo $expressive?></td>
            <td><div><a href="mark_delete.php?mark_id=<?php echo $row['mark_id']?>">delete Mark</a> || <a href="edit_mark.php?mark_id=<?php echo $row['mark_id']?>">edit Mark</a></div></td>
        </tr>
    </tbody>
    <?php
                }
        
         }
    ?>
    
</table>
</form>  
</div>

