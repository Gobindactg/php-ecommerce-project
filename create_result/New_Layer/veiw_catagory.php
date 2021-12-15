<?php
     function veiw_catagory_info(){
        $connection = mysqli_connect('localhost','root','','user_info');
        if(!$connection){
        die("Database Not connected". mysqli_error()); 
            }

        $query = "SELECT * FROM add_catagory";

        if(mysqli_query($connection, $query)){
            $query_result = mysqli_query($connection, $query);
            return $query_result;
        }else{
            die("query problem". mysqli_error($connection));
        }

    }
    $result = veiw_catagory_info();
    //while ($row=mysqli_fetch_assoc($result)){
     //   echo '<pre>';
       // print_r($result);
   // }

   if(isset($_REQUEST['Data_deleted'])){
       $message = "Your Data Successfully Deleted";
   }

?>




<link rel="stylesheet" href="css/veiw_catagory.css">
<div style="width:80% ; margin:10px auto;">
<div><a href="add_catagory.php">Add Catagory</a>  ||  <a href="veiw_catagory.php">View Catagory</a></div>


<form action="" method="post">
   <h1 style="color:red; text-align:center;"> <?php if(isset($message)){
        echo $message;
        }
        ?></h1>
   
<table border="1" width="80%" align="center">
    <thead>
        <tr class="headding">
            <th>Catagory ID </th>
            <th>Catagory Name</th>
            <th>Author Name</th>
            <th>Catagory Description</th>
            <th>Publication Status</th>
            <th>Action</th>
            
        </tr>
    </thead>
    <tbody>
        <?php while ($rows=mysqli_fetch_assoc($result)){ ?>
        <tr class="body">
            <td><?php echo $rows['catagory_id']?></td>
            <td><?php echo $rows['catagory_name']?></td>
            <td><?php echo $rows['author_name']?></td>
            <td><?php echo $rows['catagory_description']?></td>
            <td><?php if($rows['publication_status']== 1){
                echo "Published";
                }else{
                    echo "UnPublished";
                }
                ?></td>
                
            <td width="18%"><a href="catagory_edit.php?catagory_id=<?php echo $rows['catagory_id']?>">edit</a> || <a href="catagory_delete.php?catagory_id=<?php echo $rows['catagory_id']?>">delete</a></td>    
            <?php }?>
    </tbody>
    
</table>
</form>
</div>