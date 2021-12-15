<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2> Welcome : <?php echo $_SESSION['admin_name']?></h2>
        <table class="table">
            <thead>
                <tr>
                   <th><h3>User Name : <span style="color:green; font-style: italic; font-size:35px"><?php echo $_SESSION['admin_name'] ?></span></h3></th>
                </tr>
                <tr>
                    <th><h3>Email Address : <span style="color:green; font-style: italic; font-size:35px"><?php echo $_SESSION['admin_email'] ?></span></h3></th>
                  
                </tr>
                <tr>
                    <th><h3>Password : <span style="color:green; font-style: italic; font-size:35px"><?php echo $_SESSION['admin_pass'] ?></span></h3></th>
                </tr>
                <tr>
                   <th>Picture</th>
                </tr>
               <tr>
                  <th>Address</th>
               </tr>
            </thead>
            
        </table>
    </div>
</body>
</html>