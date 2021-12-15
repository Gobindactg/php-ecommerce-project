<?php
function select_district_info(){
    $connection = mysqli_connect('localhost','root','','softewere');
    if(!$connection){
        die("Not connected". mysqli_error()); 
    }
    $query ="SELECT * FROM upazila_info WHERE district_id = 2";
    $result = mysqli_query($connection,$query);
    return $result;
}

function select_upazila_info(){
    $connection = mysqli_connect('localhost','root','','softewere');
    if(!$connection){
        die("Not connected". mysqli_error()); 
    }
    $query ="SELECT * FROM upazila_info WHERE district_id = 2";
    $result = mysqli_query($connection,$query);
    return $result;
}
$result = select_upazila_info();
   

?>


<form action="" method="post">
    <div>
        <select name="district" id="">
            <option value="dhaka">Dhaka</option>
            <option value="chattogram">chattogram</option>
        </select>
    </div>
    <div>
   
        <select name="" id="">
        <?php while ($row = mysqli_fetch_assoc($result)){?>
            <option value="dhaka"><?php echo $row['upazila_name'];?></option>
                        
            <?php } ?>
        </select>
        
    </div>
</form>