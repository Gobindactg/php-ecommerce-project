
<html lang="en">
<head>
  <title>User login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="student_info1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

  <?php

if(isset($_POST['submit'])){
     
        $userName = $_POST['uname'];
        $userEmail = $_POST['email'];
        $userPass = $_POST['password'];
        $userrePass = $_POST['repassword'];
        $gender = $_POST['gender'];
        $userbirth = $_POST['birth'];
       
        $rec_file = $_FILES['upload_image'];
        $image_name = $rec_file['name'];
        $image_tmp_name = $rec_file['tmp_name'];

        if(!empty($image_name)){

              $loc = "images/";
              if(move_uploaded_file($image_tmp_name, $loc.$image_name)){
                header("location: full_login.php");
              }else{
                echo " Your File is empty";
              }

        }
  
      
   if($userName && $userEmail && $userPass && $userrePass && $userbirth !='' && $userPass == $userrePass){
         
        $connection = mysqli_connect('localhost','root','','user_info');

        if(!$connection){
            die("Not connected". mysqli_error()); 
        }

  $query = "INSERT INTO login_table (user_name, user_email, user_pass, user_re_pass, gender, date_of_birth, profile_pic) VALUES ( '$userName', '$userEmail', '$userPass', '$userrePass', '$gender', '$userbirth', '$image_name')";
  $result = mysqli_query($connection, $query);
   
  if($result){
    echo "Data Insert Successfully)";
    }else{
      echo "Data Insert Is Not Successfully";  
    }
      
   if($result){
     header("location: full_login.php?Success");
     
     
    }  
}

}

?>


<body class="full">

    <div>
  
          <div class="header">
                <h3>Student Registation Form </h3>
              
          </div>
    </div>
                  <?php
                        
                        if(isset($_REQUEST['Success'])){
                          echo "<font color='green'><h3>Your Information Successfully Sumitted</h3></font>";
                        }else{
                          echo "<h4 style='text-align:center; color:red; width:80%'; >Please Submit Your Information</h4>";
                        }
                  ?>



 
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#section1">Section 1</a></li>
          <li><a href="#section2">Section 2</a></li>
          <li><a href="#section3">Section 3</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41">Section 4-1</a></li>
              <li><a href="#section42">Section 4-2</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>    

<div id="section1" class="container-fluid">
  <h1>Section 1</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section2" class="container-fluid">
  <h1>Section 2</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section3" class="container-fluid">
  <h1>Section 3</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section41" class="container-fluid">
  <h1>Section 4 Submenu 1</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>
<div id="section42" class="container-fluid">
  <h1>Section 4 Submenu 2</h1>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
  <p>Try to scroll this section and look at the navigation bar while scrolling! Try to scroll this section and look at the navigation bar while scrolling!</p>
</div>

</body>
</html>
 






 