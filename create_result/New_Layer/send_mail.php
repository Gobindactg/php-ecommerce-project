<?php
session_start();

if(isset($_REQUEST['submit'])){
$recever = $_REQUEST['email_number'];
$subject = $_REQUEST['subject'];
$body = $_REQUEST['body'];


$headers = "Form: shuvodas72@gmail.com";



if(mail($recever, $subject, $body, $headers)){

    echo " Email Send Successfully to". $recever;
}else{

    echo "Email Sending Failed";
}

//}
}


?>

<link rel="stylesheet" href="mail1.css">
<body class="body"> 
<div class="container2">
 
  
      
     <form action="" method="post">
     <div class="modal-content">
             <div class="email_head">
               <label for=""> Send Email entering Email address </label><br>
               <label for=""> Receiver Email </label>
             <input type="text" name="email_number" placeholder=" Enter Your Email Address">
             </div>
             <div class="email_subject">
               <label for=""> Email Subject </label>
             <input type="text" name="subject" placeholder="Write Email Subject to send ">
             </div>
             <div class="email_body">
               <label for="">Email Body</label>
             <input type="text" name="body" placeholder="Write Something to send ">
             </div>
             <div class="email_submit">
             <input type="submit" name="submit" placeholder="Send email ">
             </div>
            
     </div>
     </form>



   </div>
</body>
