<?php

if(isset($_POST['btn'])){
    
    function save_catagory_info($data){

    
$connection = mysqli_connect('localhost','root','','user_info');
if(!$connection){
die("Database Not connected". mysqli_error()); 
    }

$query = "INSERT INTO add_catagory(catagory_name, catagory_description, publication_status) VALUES ('$data[catagory_name]','$data[catagory_description]','$data[publication_status]')";
//$query = "INSERT INTO add_catagory (catogory_name, catagory_description, publication_status) VALUES ('$data[catagory_name]', '$data[catagory_description]', '$data[publication_status]')";
    if(mysqli_query($connection, $query)){
        $message = "Catagory info save successfully";
        return $message;
    }else{
        die("query problem". myquli_error($connection));
    }
}

    $done = save_catagory_info($_POST);
}
?>





<div style="width:80% ; margin:10px auto;">
<div><a href="add_catagory.php">Add Catagory</a>  ||  <a href="veiw_catagory.php">View Catagory</a></div>


<form action="" method="post">
   <h1 style=" color:green; font-famaily:tahoma"> <?php  if(isset($done)){ echo $done;} ?></h1>
<table>
    <tr>
        <td>Catagory Name</td>
        <td><input type="text" name="catagory_name" required></td>
    </tr>
    <tr>
        <td>Author Name</td>
        <td><input type="text" name="author_name" value=""></td>
    </tr>
    <tr>
        <td>Catagory Description</td>
        <td><textarea name="catagory_description" id="" cols="40" rows="10"></textarea></td>
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
        <td> <input type="submit" name="btn" value="Save Catagory"></td>
    </tr>
</table>
</form>
</div>