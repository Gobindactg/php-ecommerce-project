<?php

function veiw_navbar_info(){
    $connection = mysqli_connect('localhost','root','','user_info');
    if(!$connection){
    die("Database Not connected". mysqli_error()); 
        }

    $query = "SELECT * FROM content_category WHERE publication_status=1";

    if(mysqli_query($connection, $query)){
        $query_result = mysqli_query($connection, $query);
        return $query_result;
    }else{
        die("query problem". mysqli_error($connection));
    }

}

function select_display_product_info(){
    $connection = mysqli_connect('localhost','root','','user_info');
    if(!$connection){
    die("Database Not connected". mysqli_error()); 
        }

    $query = "SELECT * FROM product_table WHERE publication_status=1 AND best_seller=0";

    if(mysqli_query($connection, $query)){
        $query_result = mysqli_query($connection, $query);
        return $query_result;
    }else{
        die("query problem". mysqli_error($connection));
    }

}

function select_display_product_promotion(){
    $connection = mysqli_connect('localhost','root','','user_info');
    if(!$connection){
    die("Database Not connected". mysqli_error()); 
        }

    $query = "SELECT * FROM product_table WHERE publication_status=1 AND best_seller=1";

    if(mysqli_query($connection, $query)){
        $query_result = mysqli_query($connection, $query);
        return $query_result;
    }else{
        die("query problem". mysqli_error($connection));
    }

}

function select_display_blog(){
    $connection = mysqli_connect('localhost','root','','user_info');
    if(!$connection){
    die("Database Not connected". mysqli_error()); 
        }

    $query = "SELECT * FROM blog_table WHERE publication_status=1 ORDER BY blog_id DESC  LIMIT 10 ";

    if(mysqli_query($connection, $query)){
        $query_result = mysqli_query($connection, $query);
        return $query_result;
    }else{
        die("query problem". mysqli_error($connection));
    }

}


 function single_product_details($product_id){
    $connection = mysqli_connect('localhost','root','','user_info');
    if(!$connection){
    die("Database Not connected". mysqli_error()); 
        }
    $query = "SELECT p.*, c.content_name, m.manufacturer_name FROM product_table as p, content_category as c, product_manufacturer as m WHERE p.content_id=c.content_id AND p.manufacturer_id=m.manufacturer_id AND p.product_id='$product_id'";
    
     if(mysqli_query($connection, $query)){
         $query_result = mysqli_query($connection, $query);
         return $query_result;
     }else{
         die("query problem". mysqli_error($connection));
     }
}

function select_product_info_by_category_id($content_id){

    $connection = mysqli_connect('localhost','root','','user_info');
    if(!$connection){
    die("Database Not connected". mysqli_error()); 
        }
    $query = "SELECT * FROM product_table WHERE content_id='$content_id' AND publication_status=1 AND deletion_status=1";
    
     if(mysqli_query($connection, $query)){
         $related_query_result = mysqli_query($connection, $query);
         return $related_query_result;
     }else{
         die("query problem". mysqli_error($connection));
     }

}


function select_product_info_display_by_category_id($content_id){
      $connection = mysqli_connect('localhost','root','','user_info');
    if(!$connection){
    die("Database Not connected". mysqli_error()); 
        }
    $query = "SELECT * FROM product_table WHERE content_id='$content_id' AND publication_status=1 AND deletion_status=1";
    
     if(mysqli_query($connection, $query)){
         $related_query_result = mysqli_query($connection, $query);
         return $related_query_result;
     }else{
         die("query problem". mysqli_error($connection));
     }
}

function save_cart_product_info($data){
   
   $connection = mysqli_connect('localhost','root','','user_info');
   if(!$connection){
   die("Database Not connected". mysqli_error()); 
       }
   $product_id = $data['product_id'];
   $session_id= session_id();
   
   $query = "SELECT * FROM product_table WHERE product_id='$product_id'";
   $query_result = mysqli_query($connection, $query);
   $product_info = mysqli_fetch_assoc($query_result);
   $product_quantity = $product_info['product_quantity'];
   $cart_product_quantity = $data['product_quantity'];

    $query = "SELECT * FROM temp_cart_table WHERE session_id='$session_id' AND product_id='$product_id'";
    $query_result = mysqli_query($connection, $query);
    $rows = mysqli_fetch_assoc($query_result);
    
    $product_id2 = $rows['product_id'];
    $session_id2 = $rows['session_id'];
      
   
   if($session_id == $session_id2 && $product_id == $product_id2){
    echo "<h3 style='color:red;'> This Category Product Already add in your cart!!! Please go to your cart and update quantity. </h3>";
    }else{
      

   if($cart_product_quantity > $product_quantity){
       echo "'<h3 style='color:red;'>You Have To Order Equal or Less than  $product_quantity</h3>";
   }else{
    
        $query = "INSERT INTO temp_cart_table (product_id, session_id, product_name, product_price, product_quantity, product_image) VALUES ('$product_id', '$session_id', '$product_info[product_name]', '$product_info[product_price]', '$data[product_quantity]', '$product_info[product_image]' )";
         mysqli_query($connection, $query);
         header('location: cart_content.php');
       }
   }
}


function product_add_cart(){
    $connection = mysqli_connect('localhost','root','','user_info');
    if(!$connection){
    die("Database Not connected". mysqli_error()); 
        }
        $session_id = session_id();  
    $query = "SELECT * FROM temp_cart_table WHERE session_id='$session_id'";
    
     if(mysqli_query($connection, $query)){
         $cart_query_result = mysqli_query($connection, $query);
         return $cart_query_result;
     }else{
         die("query problem". mysqli_error($connection));
     }
}

function update_product_quantity_info($data){
    require "db_connect.php";
    $session_id = session_id(); 
   
    $query = "UPDATE temp_cart_table SET product_quantity='$data[product_quantity]' WHERE session_id='$session_id' AND product_id='$data[product_id]'";
    
    if(mysqli_query($connection, $query)){
        $message = "Cart product info updated successfully";
        return $message;
       
       
    }else{
        die("query problem". mysqli_error($connection));
    }
    
}

function delete_product_quantity_info($product_id){
    require "db_connect.php";
    $session_id = session_id(); 
    $query = "DELETE FROM temp_cart_table  WHERE session_id='$session_id' AND product_id='$product_id'";
    
    if(mysqli_query($connection, $query)){
        $message = "Cart product info updated successfully";
        return $message;
    
    }else{
        die("query problem". mysqli_error($connection));
    }

}

function save_customer_info($data){
    session_start();
    require "db_connect.php";

    $email_address=$data['email_address'];
    $query="SELECT COUNT(email_address) email_address FROM customer_table WHERE email_address='$email_address'";
    $result1 = mysqli_query($connection,$query);

    while($count = mysqli_fetch_assoc($result1)){
        $count = $count['email_address'];
        if ($count==0) {
    $query = "INSERT INTO customer_table(first_name, last_name, email_address, password, address, phone_number, city, country) VALUES('$data[first_name]', '$data[last_name]', '$data[email_address]', '$data[password]', '$data[address]', '$data[phone_number]', '$data[city]', '$data[country]')";
    if(mysqli_query($connection, $query)){
        $customer_id = mysqli_insert_id($connection);
        $_SESSION['customer_id'] = $customer_id;
        $_SESSION['customer_name'] = $data['first_name'] .' '. $data['last_name'];
        $_SESSION['account_name'] = $data['first_name'];
       header("location: shipping.php");
    
    }else{
        die("query problem". mysqli_error($connection));
    }

}else{
    $message1 ="Your email address already registered! please try again new email address";
    return $message1;
}

    }
}

function customer_login_check($data){
    require "db_connect.php";
   
    $_SESSION['session_id'] = session_id();
    $query = "SELECT * FROM customer_table WHERE email_address='$data[email_address]' AND password ='$data[password]'";
    if(mysqli_query($connection,$query)){
        $query_result = mysqli_query($connection,$query);
        $customer_info = mysqli_fetch_assoc($query_result);
         if($customer_info){
            
            $_SESSION['customer_email'] =  $customer_info['email_address'];
            $query = "SELECT * FROM temp_cart_table WHERE session_id = '$_SESSION[session_id]'";
            $query_result = mysqli_query($connection, $query);
            while ($rows = mysqli_fetch_assoc($query_result)){
            $query = "INSERT INTO customer_data_table (product_id, customer_email, product_name, product_price, product_quantity, product_image) VALUES ('$rows[product_id]', '$_SESSION[customer_email]', '$rows[product_name]', '$rows[product_price]', '$rows[product_quantity]', '$rows[product_image]')";
            mysqli_query($connection, $query);
                }
            $_SESSION['customer_id'] = $customer_info['customer_id'];
            $_SESSION['customer_name'] = $customer_info['first_name'] .' ' . $customer_info['last_name'];
            $_SESSION['account_name'] = $customer_info['first_name'];
           
                       
            header ('location: shipping.php');
        }else{
            $message = "Please use valid email address and passowrd";
            return $message;
        }
    }else{
        die ('Query Problem'.mysqli_error($connection));
    }
}



function save_shipping_info($data){
    require "db_connect.php";

    $email_address=$data['email_address'];
    $query="SELECT COUNT(email_address) email_address FROM shipping_table WHERE email_address='$email_address'";
    $result1 = mysqli_query($connection,$query);

    while($count = mysqli_fetch_assoc($result1)){
        $count = $count['email_address'];
        if ($count==0) {

    $query = "INSERT INTO shipping_table(full_name, email_address, address, phone_number, city, country) VALUES('$data[full_name]', '$data[email_address]', '$data[address]', '$data[phone_number]', '$data[city]', '$data[country]')";
    if(mysqli_query($connection, $query)){
        $shipping_id = mysqli_insert_id($connection);
        $_SESSION['shipping_id'] = $shipping_id;

        header("location: payment.php");
    
    }else{
        die("query problem". mysqli_error($connection));
    }
    }else{
        $query = "UPDATE shipping_table SET full_name='$data[full_name]', email_address='$data[email_address]', address='$data[address]', phone_number='$data[phone_number]', city='$data[city]', country='$data[country]' WHERE email_address='$_SESSION[customer_email]'";
        if(mysqli_query($connection, $query)){
            header("location: payment.php");          
        
        }else{
            die("query problem". mysqli_error($connection));
        }
   
    }
    }
}



    
// final query for three table , paymet-table, order_table, order-details table and delete temp cart table code
function save_order_info($data){
    require "db_connect.php";
    $payment_type=$data['payment_type'];
    if($payment_type =='cash_on_delivery'){
        $query = "INSERT INTO order_table(customer_id, shipping_id, order_total) VALUES ('$_SESSION[customer_id]', '$_SESSION[shipping_id]', '$_SESSION[g_total]')";
        if(mysqli_query($connection, $query)){
            $order_id = mysqli_insert_id($connection);
            $_SESSION['order_id']=$order_id;
            $query = "INSERT INTO payment_table(order_id, payment_type) VALUES ('$_SESSION[order_id]', '$data[payment_type]')";
            if(mysqli_query($connection, $query)){
                $session_id = session_id();
                $query = "SELECT * FROM temp_cart_table WHERE session_id='$session_id'";
                $query_result = mysqli_query($connection, $query);
                while ($rows = mysqli_fetch_assoc($query_result)){
                    $query = "INSERT INTO order_details_table (order_id, product_id, session_id, product_name, product_price, product_quantity) VALUES ('$_SESSION[order_id]', '$rows[product_id]', '$session_id', '$rows[product_name]', '$rows[product_price]', '$rows[product_quantity]')";
                    mysqli_query($connection, $query);
                }
                $query = "DELETE FROM temp_cart_table WHERE session_id='$session_id'";
                mysqli_query($connection, $query);
                header('location: customer_home.php');

            }else{
                die("query problem". mysqli_error($connection));
            }
        }else{
            die("query problem". mysqli_error($connection));
        }
    }elseif($payment_type=='bkash'){

    }
}


function customer_cart_content(){
         require "db_connect.php"; 
         $query = "SELECT * FROM customer_data_table WHERE customer_email = '$_SESSION[customer_email]'";
         if(mysqli_query($connection, $query)){
            $customer_query_result = mysqli_query($connection, $query);
            return $customer_query_result;
        }else{
            die("query problem". mysqli_error($connection));
        }
}

function customer_invoice(){
    require "db_connect.php"; 

    $query = "SELECT s.full_name, s.email_address, s.address, s.phone_number, s.city, s.country FROM shipping_table as s WHERE email_address='$_SESSION[customer_email]'";
    
     if(mysqli_query($connection, $query)){
         $query_result = mysqli_query($connection, $query);
         return $query_result;
     }else{
         die("query problem". mysqli_error($connection));
     }
}
function customer_invoice2(){
    require "db_connect.php"; 

    $query = "SELECT * FROM customer_data_table WHERE customer_email='$_SESSION[customer_email]'";
    
     if(mysqli_query($connection, $query)){
         $query_result = mysqli_query($connection, $query);
         return $query_result;
     }else{
         die("query problem". mysqli_error($connection));
     }
}

function select_shipping_info(){
    require "db_connect.php"; 
    $query = "SELECT * FROM shipping_table WHERE email_address ='$_SESSION[customer_email]'";
    
     if(mysqli_query($connection, $query)){
         $query_result = mysqli_query($connection, $query);
         return $query_result;
     }else{
         die("query problem". mysqli_error($connection));
     }
}

?>