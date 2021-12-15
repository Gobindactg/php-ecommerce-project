<?php
$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error()); 
}

if(isset($_POST['send_mail'])){

    $recev_array =$_POST['check_data'];
    $all_select_mail = implode(', ', $recev_array);
   $query = "SELECT * FROM login_table WHERE id in ($all_select_mail)";

   $final_mail_query = mysqli_query($connection,$query);

   if($final_mail_query==true){
       while($row = mysqli_fetch_assoc($final_mail_query)){

        $email_send = $row['user_email'];
        $subject = $_REQUEST['header'];
        $body = $_REQUEST['body'];
        $headers = "Form: shuvodas72@gmail.com";

        
        if(mail($email_send, $subject, $body, $headers)){
                header("location: send_multi_email.php?success");
            
         }else{

             echo "Email Sending Failed";
        }
       }
   }else{
       echo " Quary not true";
   }





}







?>