<?php
session_start();

$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error($connection));
 }

 if(isset($_POST['product_manufacturer'])){
    $manufacturer_name = $_POST['manufacturer_name'];
		$product_description = $_POST['manufacturer_description'];
		$publication_status = $_POST['publication_status'];
    $update_id = $_REQUEST['manufacturer_id'];

    $update_query ="UPDATE product_manufacturer SET manufacturer_name='$manufacturer_name', product_description='$product_description', publication_status='$publication_status'  WHERE manufacturer_id='$update_id'";
   // $update_query ="UPDATE product_manufacturer SET manufacturer_name='$manufacturer_name', product_description='$manufacturer_description', publication_status='$publication_status' WHERE manufacturer_id='$update_id'";
    $final_query = mysqli_query($connection,$update_query);

    if($final_query){
        header("location: manage_manufacturer.php?updated");
      //echo "Profile  updated";
    }else{
        echo "Profile do not updated";
    }

  }

?>