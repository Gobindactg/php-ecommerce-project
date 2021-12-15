<?php
function admin_login_check($data){
    require "db_connect.php";
    //$password=MD5($data['password']);
   // exit();// when display before information
    $query = "SELECT * FROM admin_table WHERE admin_email='$data[email_address]' AND admin_pass ='$data[user_pass]' AND deletion_status= '1' ";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $admin_info = mysqli_fetch_assoc($query_result);
        //echo '<pre>';
       // print_r ($admin_info);
       // exit();
        if($admin_info){
            session_start();
            $_SESSION['admin_id']=$admin_info['admin_id'];
            $_SESSION['admin_name']=$admin_info['admin_name'];
            $_SESSION['admin_email']=$admin_info['admin_email'];
            $_SESSION['admin_pass']=$admin_info['admin_pass'];
            $_SESSION['admin_phone']=$admin_info['admin_phone'];
            $_SESSION['admin_address']=$admin_info['admin_address'];
            $_SESSION['admin_details']=$admin_info['admin_about'];
            $_SESSION['admin_picture']=$admin_info['picture'];
            
            header ('location: admin/admin_master.php');
        }else{
            $message = "Please use valid email address and passowrd";
            return $message;
        }
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}


function admin_logout(){
    unset($_SESSION['admin_id']);
    unset($_SESSION['admin_name']);
    header("location: ../index.php");
}

function user_login_check($data){
    require "db_connect.php";
    //$password=MD5($data['password']);
   // exit();// when display before information
    $query = "SELECT * FROM user_table WHERE user_email='$data[email_address]' AND user_pass ='$data[user_pass]' AND deletion_status= '1' ";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $user_info = mysqli_fetch_assoc($query_result);
        //echo '<pre>';
       // print_r ($admin_info);
       // exit();
        if($user_info){
            session_start();
            $_SESSION['user_id']=$user_info['user_id'];
            $_SESSION['user_name']=$user_info['user_name'];
            $_SESSION['user_email']=$user_info['user_email'];
            $_SESSION['user_pass']=$user_info['user_pass'];
            $_SESSION['user_phone']=$user_info['user_phone'];
            $_SESSION['user_address']=$user_info['user_address'];
            $_SESSION['user_details']=$user_info['user_about'];
            $_SESSION['user_picture']=$user_info['picture'];
            
            header ('location: user_profile_font.php');
        }else{
            $message = "Please use valid email address and passowrd";
            return $message;
        }
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}


function save_category($data){
    require "db_connect.php";
   
    $query = "INSERT INTO content_category (user_name, content_name, content_description, publication_status) VALUES ('$_SESSION[admin_name]', '$data[content_name]', '$data[content_description]', '$data[publication_status]')";
    if(mysqli_query($connection,$query)){
    $query_result = mysqli_query($connection,$query);
    header('location:content_category.php');
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}

function veiw_catagory_info(){
    $connection = mysqli_connect('localhost','root','','user_info');
    if(!$connection){
    die("Database Not connected". mysqli_error()); 
        }

    $query = "SELECT * FROM content_category/* WHERE deletion_status=1*/";

    if(mysqli_query($connection, $query)){
        $query_result = mysqli_query($connection, $query);
        return $query_result;
    }else{
        die("query problem". mysqli_error($connection));
    }

}

function user_logout(){
    session_start();
    unset($_SESSION['customer_id']);
    unset($_SESSION['customer_name']);
    unset($_SESSION['account_name']);
    unset ($_SESSION['customer_email']);
    header("location:index.php");
}

function unpublished_category_info($content_id){
    require "db_connect.php";
    $query = "UPDATE content_category SET publication_status= 0 WHERE content_id=$content_id";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $message = "update successfully";
        return $message;
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}

function published_category_info($content_id){
    require "db_connect.php";
    $query = "UPDATE content_category SET publication_status= 1 WHERE content_id=$content_id";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $message = "update successfully";
        return $message;
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}

function active_category_info($content_id){
    require "db_connect.php";
    $query = "UPDATE content_category SET deletion_status= 0 WHERE content_id=$content_id";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $message = "update successfully";
        return $message;
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}

function deletion_category_info($content_id){
    require "db_connect.php";
    $query = "UPDATE content_category SET deletion_status= 1 WHERE content_id=$content_id";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $message = "update successfully";
        return $message;
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}

function veiw_blog_info(){
    $connection = mysqli_connect('localhost','root','','user_info');
    if(!$connection){
    die("Database Not connected". mysqli_error()); 
        }

    $query = "SELECT * FROM blog_table/* WHERE deletion_status=1*/";

    if(mysqli_query($connection, $query)){
        $query_result = mysqli_query($connection, $query);
        return $query_result;
    }else{
        die("query problem". mysqli_error($connection));
    }

}
function unpublished_blog_info($blog_id){
    require "db_connect.php";
    $query = "UPDATE blog_table SET publication_status= 0 WHERE blog_id=$blog_id";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $message = "update successfully";
        return $message;
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}

function published_blog_info($blog_id){
    require "db_connect.php";
    $query = "UPDATE blog_table SET publication_status= 1 WHERE blog_id=$blog_id";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $message = "update successfully";
        return $message;
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}
function veiw_admin_info(){
    require "db_connect.php";

    $query = "SELECT * FROM user_table";

    if(mysqli_query($connection, $query)){
        $query_result = mysqli_query($connection, $query);
        return $query_result;
    }else{
        die("query problem". mysqli_error($connection));
    }

}

function select_content_info_by_id($content_id){
    require "db_connect.php";

    $query = "SELECT * FROM content_category WHERE content_id='$content_id'";

    if(mysqli_query($connection, $query)){
        $query_result = mysqli_query($connection, $query);
        return $query_result;
    }else{
        die("query problem". mysqli_error($connection));
    }

}

function update_category_info($_data){
    require "db_connect.php";
    $query = "UPDATE content_table SET content_name = '$data[content_name]', content_description='$data[content_description]', publication_status='$data[publication_status]' WHERE content_id='$data[content_name]'";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $message = "update successfully";
       
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}
function select_all_published_category_info(){
    require "db_connect.php";
    $query = "SELECT * FROM content_category WHERE publication_status=1 AND deletion_status=1";

    if(mysqli_query($connection, $query)){
        $query_result = mysqli_query($connection, $query);
        return $query_result;
    }else{
        die("query problem". mysqli_error($connection));
    }
}

function veiw_manufacturer_info(){
    $connection = mysqli_connect('localhost','root','','user_info');
    if(!$connection){
    die("Database Not connected". mysqli_error()); 
        }

    $query = "SELECT * FROM product_manufacturer/* WHERE deletion_status=1*/";

    if(mysqli_query($connection, $query)){
        $query_result = mysqli_query($connection, $query);
        return $query_result;
    }else{
        die("query problem". mysqli_error($connection));
    }

}

function unpublished_manufacturer_info($manufacturer_id){
    require "db_connect.php";
    $query = "UPDATE product_manufacturer SET publication_status= 0 WHERE manufacturer_id=$manufacturer_id";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $message = "update successfully";
        return $message;
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}

function published_manufacturer_info($manufacturer_id){
    require "db_connect.php";
    $query = "UPDATE product_manufacturer SET publication_status= 1 WHERE manufacturer_id=$manufacturer_id";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $message = "update successfully";
        return $message;
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}

function active_manufacturer_info($manufacturer_id){
    require "db_connect.php";
    $query = "UPDATE product_manufacturer SET deletion_status= 0 WHERE manufacturer_id=$manufacturer_id";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $message = "update successfully";
        return $message;
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}
function deletion_manufacturer_info($manufacturer_id){
    require "db_connect.php";
    $query = "UPDATE product_manufacturer SET deletion_status= 1 WHERE manufacturer_id=$manufacturer_id";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $message = "update successfully";
        return $message;
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}
    function select_manufacturer_info_by_id($manufacturer_id){
        $connection = mysqli_connect('localhost','root','','user_info');
        if(!$connection){
        die("Database Not connected". mysqli_error()); 
            }
    
        $query = "SELECT * FROM product_manufacturer WHERE manufacturer_id= $manufacturer_id ";
    
        if(mysqli_query($connection, $query)){
            $query_result = mysqli_query($connection, $query);
            return $query_result;
        }else{
            die("query problem". mysqli_error($connection));
        }
    
    }
    function update_manufacturer_info($_data){
        require "db_connect.php";
        $query = "UPDATE product_manufacturer SET manufacturer_name = '$data[manufacturer_name]', product_description='$data[manufacturer_description]', publication_status='$data[publication_status]' WHERE manufacturer_id='$data[manufacturer_id]'";
        if(mysqli_query($connection,$query)){
            $query_result = mysqli_query($connection,$query);
            $message = "update successfully";
           
           
        }else{
            die ('Query Problem'.mysqli_error($connection));
        }
    }

    function select_all_published_manufacturer_info(){
        require "db_connect.php";
        $query = "SELECT * FROM product_manufacturer WHERE publication_status=1 AND deletion_status=1";
    
        if(mysqli_query($connection, $query)){
            $query_result = mysqli_query($connection, $query);
            return $query_result;
        }else{
            die("query problem". mysqli_error($connection));
        }
    }

                    
// start veiw product information

function veiw_product_info(){
    require "db_connect.php";

    $query = 'SELECT p.*, c.content_name, m.manufacturer_name FROM product_table as p, content_category as c, product_manufacturer as m WHERE p.content_id=c.content_id AND p.manufacturer_id=m.manufacturer_id AND p.deletion_status=1';
   // $query = 'SELECT *, content_category.content_name, product_manufacturer.manufacturer_name FROM product_table, content_category, product_manufacturer WHERE product_table.content_id=content_category.content_id AND product_table.manufacturer_id=product_manufacturer.manufacturer_id AND product_table.deletion_status=1';
    if(mysqli_query($connection, $query)){
        $query_result = mysqli_query($connection, $query);
        return $query_result;
    }else{
        die("query problem". mysqli_error($connection));
    }

}
   

function select_product_info($product_id){
    require "db_connect.php";
  
    $query = "SELECT *, content_category.content_name, product_manufacturer.manufacturer_name FROM product_table, content_category, product_manufacturer WHERE product_table.content_id=content_category.content_id AND product_table.manufacturer_id=product_manufacturer.manufacturer_id AND product_table.product_id='$product_id'";
    if(mysqli_query($connection, $query)){
        $query_result = mysqli_query($connection, $query);
        return $query_result;
    }else{
        die("query problem". mysqli_error($connection));
    }

}
function select_product_info_by_id($product_id){
    require "db_connect.php";

    $query = "SELECT p.*, c.content_name, m.manufacturer_name FROM product_table as p, content_category as c, product_manufacturer as m WHERE p.content_id=c.content_id AND p.manufacturer_id=m.manufacturer_id AND p.product_id='$product_id'";
    //$query = 'SELECT *, content_category.content_name, product_manufacturer.manufacturer_name FROM product_table, content_category, product_manufacturer WHERE product_table.content_id=content_category.content_id AND product_table.manufacturer_id=product_manufacturer.manufacturer_id AND product_table.deletion_status=1';
    if(mysqli_query($connection, $query)){
        $query_result = mysqli_query($connection, $query);
        return $query_result;
    }else{
        die("query problem". mysqli_error($connection));
    }

}

function update_product_info($_data){
    require "db_connect.php";
    $directory='product_image/';
    $target_file=$directory.$_FILES['upload_image']['name'];
    $file_type=pathinfo($target_file, PATHINFO_EXTENSION);

    $file_size = $_FILES['upload_image']['size'];
    
    $check = getimagesize($_FILES['upload_image']['tmp_name']);
        
   
    if($check){
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
                            $query = "UPDATE product_table SET product_name='$_data[product_name]', content_id='$_data[content_id]', manufacturer_id='$_data[manufacturer_id]', product_price='$_data[product_price]', product_quantity='$_data[product_quantity]', product_sku='$_data[product_sku]', product_short_description='$_data[product_short_description]', product_long_description='$_data[product_long_description]', product_image='$target_file', publication_status='$_data[publication_status]', best_seller='$data[best_seller]' WHERE product_id = '$_data[product_id]'";
                        
                        //  $query ="INSERT INTO product_table(product_name, content_id, manufacturer_id, product_price) VALUES ('$data[product_name]', '$data[content_id]', '$data[manufacturer_id]', '$data[product_price]')";
                            if(mysqli_query($connection, $query)){
                            // $message = "product info save successfully";
                            //  return $message;
                                header('location: manage_product.php?success');
                            }else{
                                die('Query Problem'.mysqli_error($connection));
                            }
                        
                        }
                    }
                
        }else{
            echo "Your upload file is not an image!. Please try again";
        }

    }
 
function active_product_info($product_id){
    require "db_connect.php";
    $query = "UPDATE product_table SET deletion_status= 0 WHERE product_id=$product_id";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $message = "update successfully";
        return $message;
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}
function deletion_product_info($product_id){
    require "db_connect.php";
    $query = "UPDATE product_table SET deletion_status= 1 WHERE product_id=$product_id";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $message = "update successfully";
        return $message;
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}  

function select_all_order_info(){
    require "db_connect.php";
    
    $query ="SELECT o.order_id, o.customer_id, o.order_total, o.order_status, c.first_name, c.last_name, c.email_address, p.payment_type, p.payment_status FROM order_table as o, customer_table as c, payment_table as p WHERE o.customer_id = c.customer_id AND o.order_id = p.order_id";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        return $query_result;
       
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}
 

function product_details_cart(){
    $connection = mysqli_connect('localhost','root','','user_info');
    if(!$connection){
    die("Database Not connected". mysqli_error()); 
        }
        $session_id = session_id();  
    $query = "SELECT * FROM order_details_table WHERE session_id='$session_id'";
    
     if(mysqli_query($connection, $query)){
         $details_query_result = mysqli_query($connection, $query);
         return $details_query_result;
     }else{
         die("query problem". mysqli_error($connection));
     }
}
    ?>