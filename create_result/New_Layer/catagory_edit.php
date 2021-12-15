<?php
$catagory_id = $_REQUEST['catagory_id'];
function select_catagory_by_id($catagory_id){


$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error()); 
}

$query = "SELECT * FROM add_catagory WHERE catagory_id = $catagory_id";

if(mysqli_query($connection, $query)){
    $query_result = mysqli_query($connection, $query);
    return $query_result;
}else{
    die("query problem". mysqli_error($connection));
}

}
 
 $query_result = select_catagory_by_id($catagory_id);
 $catagory_info = mysqli_fetch_assoc($query_result);

//this code use for update information 


/*if(isset($_POST['update'])){
   
   
    function update_catagory_info($data){
        $connection = mysqli_connect('localhost','root','','user_info');
        $catagory_id = $catagory_id;
        $query="UPDATE add_catagory SET catagory_name ='$data[catagory_name]', catagory_description ='$data[catagory_description]', publication_status ='$data[publication_status]' WHERE catagory_id ='$data[catagory_id]'";
       // $query = "UPDATE add_catagory SET catagory_name='$data[catagory_name]', catagory_description='$data[catagory_description]', publication_status='$data[publication_status]' WHERE catagory_id ='$data[catagory_id]'";
       
        if(mysqli_query($connection,$query)){
            header("Location: veiw_catagory.php");
        }else{
            die("query problem". mysqli_error($connection));
        }
    }


   update_catagory_info($_POST);
}*/




$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error($connection));
 }

 if(isset($_POST['update'])){
    $catagory_name = $_POST['catagory_name'];
    $catagory_description = $_POST['catagory_description'];
    $author_name = $_POST['author_name'];
    $publication_status = $_POST['publication_status'];
    $update_id = $_REQUEST['catagory_id'];


$update_query = "UPDATE add_catagory SET catagory_name='$catagory_name', catagory_description='$catagory_description', publication_status='$publication_status' WHERE catagory_id= $update_id";

$final_query = mysqli_query($connection,$update_query);

if($final_query){
    header("location: veiw_catagory.php?updated");
}

    }

?>







<div style="width:80% ; margin:10px auto;">
<div><a href="add_catagory.php">Add Catagory</a>  ||  <a href="veiw_catagory.php">View Catagory</a></div>


<form action="" method="post">
  
<table>
    <tr>
        <td>Catagory Name</td>
        <td><input type="text" name="catagory_name" value="<?php echo $catagory_info['catagory_name']; ?>"></td>
    </tr>
    <tr>
        <td>Author Name</td>
        <td><input type="text" name="author_name" value="<?php echo $catagory_info['author_name']; ?>"></td>
    </tr>
    <tr>
        <td>Catagory Description</td>
        <td><textarea name="catagory_description" id="" cols="40" rows="10"><?php echo $catagory_info['catagory_description']; ?></textarea></td>
    </tr>
    <tr>
        <td>Publication Status</td>
        <td>
            <select name="publication_status" id="">
                <option value="">Select publiscation status</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td> <input type="submit" name="update" value="Update Catagory"></td>
    </tr>
    
</table>
</form>
</div>