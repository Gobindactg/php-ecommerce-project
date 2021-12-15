






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mark_show.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th><a href="mark_entry.php">ADD Mark</a> ||  <a href="edit_mark.php">edit Mark</a></th>
                   
                </tr>
            </thead>
        </table>

       <form action="" method="post">
       <div class="container">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>
                     <select style="width: 50%; " name="search_name" value="<?php echo $recv_class;?>">
                                <option value="">Select Class</option>
                                <option value="one">One</option>
                                <option value="two">Two</option>
                                <option value="three">Three</option>
                                <option value="four">Four</option>
                               <option value="five">Five</option>
                     </select>
                     
                     </th>
                     <th scope="col">
                            <select  style="width: 65%;" name="group" id="">
                                 <option value="nill">N/A</option>
                                 <option value="science">Science</option>
                                 <option value="commerce">Commerce</option>
                                 <option value="arts">Arts</option>
                            </select>
                      
                    </th>
                    <th scope="col">
                            <select style="width: 60%;" name="academy_year" id="">
                                <option value="">select Year</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                            </select>
                        
                    </th>
                    <th scope="col">
                        
                            <select style="width: 55%;" name="section" id="">
                                <option value="nill">N/A</option>
                                <option value="joba">Joba</option>
                                <option value="belly">Belly</option>
                            </select>
                  
                    </th>
                     <th>
                        <input type="submit" name="search" value="search"> 
                     </th>
               </tr>
            </thead>
        </table>
      
            
    <table class="table">
    
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
     
  
 $connection = mysqli_connect('localhost','root','','user_info');

 if(!$connection){
     die("Not connected". mysqli_error()); 
 }
  if(isset($_REQUEST['search'])){

     $recv_class = $_REQUEST['search_name'];
    
    
     $query  = "SELECT * FROM mark_table WHERE student_class LIKE '%$recv_class%'";
    // $count = mysqli_num_rows($query);
   
     $result = mysqli_query($connection,$query);
  
        while ($row = mysqli_fetch_assoc($result)){
        ?>
          
    <tbody class="thead-light">
        <tr>
           
            <td><?php echo $row['student_roll']?></td>
            <td><?php echo $row['student_class']?></td>
            <td><?php echo $row['bangla_mark']?></td>
            <td><?php echo $row['english_mark']?></td>
            <td><?php echo $row['math_mark']?></td>
            <td><?php echo $row['science_mark']?></td>
            <td><?php echo $row['bob_mark']?></td>
            <td><?php echo $row['religion_mark']?> </td>
            <td><?php echo $row['music_mark']?></td>
            <td><?php echo $row['social_mark']?></td>
            <td><?php echo $row['expressive_mark']?></td>
            <td><div><a href="mark_delete.php?mark_id=<?php echo $row['mark_id']?>">delete Mark</a> || <a href="edit_mark.php?mark_id=<?php echo $row['mark_id']?>">edit Mark</a></div></td>
        </tr>
    </tbody>
    <?php
    
        }
    }
    ?>
</table>
</div>

</body>
</html>
