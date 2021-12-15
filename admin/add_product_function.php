<?php

$product_name = $_POST['product_name'];
		$content_id = $_POST['content_id'];
		$manufacturer_id = $_POST['manufacturer_id'];
		$product_price = $_POST['product_price'];
		$product_quantity = $_POST['product_quantity'];
		$product_sku = $_POST['product_sku'];
		$product_short_description = $_POST['product_short_description'];
		$product_long_description = $_POST['product_long_description'];
		$publication_status = $_POST['publication_status'];
        $best_seller = $_POST['best_seller'];
	
        $directory='product_image/';
        $target_file=$directory.$_FILES['upload_image']['name'];
        $file_type=pathinfo($target_file, PATHINFO_EXTENSION);
    // echo 'file type is :'.$file_type;
        //echo '<br>';
        $file_size = $_FILES['upload_image']['size'];
        //echo 'file size is :'.$file_size;
    //  echo '<br>';
        $check = getimagesize($_FILES['upload_image']['tmp_name']);
        //echo '<pre>';
        //print_r($check);
    ?>
    <div class="container">
    <?php if($check){
            if(file_exists($target_file)){
                echo 'This image is already exists! Please try again later';
                }else{
                    if($file_type !='jpg' && $file_type !='png'){
                        echo "Your file type is not valid! Please try again";
                    }else{
                        if($file_size> 512000){
                            echo " Your file Size is Too larges! Please tyy again";
                        }else{
                            move_uploaded_file($_FILES['upload_image']['tmp_name'], $target_file);
                            $connection = mysqli_connect('localhost','root','','user_info');
                            if(!$connection){
                                die("Not connected". mysqli_error()); 
                            }
					
							   $query = "INSERT INTO product_table(product_name, content_id, manufacturer_id, product_price, product_quantity, product_sku, product_short_description, product_long_description, product_image, publication_status, best_seller) VALUES ('$product_name', '$content_id', '$manufacturer_id', '$product_price', '$product_quantity', '$product_sku', '$product_short_description', '$product_long_description', '$target_file', '$publication_status', '$best_seller')";
							  	$result = mysqli_query($connection, $query);            
									  if($result){
									  header('location: add_product.php?success');
										
										 }else{
											 echo "query Problem";
												}
											   
											}
				
                        }
                    }
                }else{
					echo "Your upload file is not an image!. Please try again";
				}
        
   
   /* function save_product_info($data){
        $connection = mysqli_connect('localhost','root','','user_info');
        if(!$connection){
            die("Not connected". mysqli_error()); 
        }
        $directory='assets/product_image/';
        $target_file=$directory.$_FILES['upload_image']['name'];
        $file_type=pathinfo($target_file, PATHINFO_EXTENSION);
      
        $file_size = $_FILES['upload_image']['size'];
      
        $check = getimagesize($_FILES['upload_image']['tmp_name']);
       
       if($check){
            if(file_exists($target_file)){
                echo 'This image is already exists! Please try again later';
                }else{
                    if($file_type !='jpg' && $file_type !='png'){
                        echo "Your file type is not valid! Please try again";
                    }else{
                        if($file_size> 512000){
                            echo " Your file Size is Too larges! Please tyy again";
                        }else{
                            move_uploaded_file($_FILES['upload_image']['tmp_name'], $target_file);
                            //$query = "INSERT INTO product_table(product_name, content_id, manufacturer_id, product_price, product_quantity, product_sku, product_short_description, product_long_description, product_image, publication_status) VALUES ('$data[product_name]', '$data[content_id]', '$data[manufacturer_id]', '$data[product_price]', '$data[product_quantity]', '$data[product_sku]', '$data[product_short_description]', '$data[product_long_description]', '$data[upload_image]', '$data[publication_status]')";
                            $query ="INSERT INTO product_table(product_name, content_id, manufacturer_id, product_price) VALUES ('$data[product_name]', '$data[content_id]', '$data[manufacturer_id]', '$data[product_price]')";
                            if(mysqli_query($connection,$query)){
                                $message = "product info save successfully";
                                return $message;
                            }else{
                                die('Query Problem'.mysqli_error($connection));
                            }
                           
                        }
                    }
                }
        }else{
            echo "Your upload file is not an image!. Please try again";
        }
   
    }*/
    ?>