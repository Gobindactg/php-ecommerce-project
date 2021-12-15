<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/edit_mark1.css">
</head>
<body>
    <div class="container">
        <div class="header" >
        <div class="header_left"><h3> WELCOME NOIPUNNO DIGITAL SCHOOL </h3></div>
            <div class="header_right"><button class="button">Log out</button></div>
        </div>
        
        <?php

            $connection = mysqli_connect('localhost','root','','user_info');

                    if(!$connection){
                die("Not connected". mysqli_error()); 
            }

            $query = "SELECT ins_name, ins_address, ins_mobile FROM institution_table WHERE 1";
            $result = mysqli_query($connection,$query);
                    
            while ($row = mysqli_fetch_assoc($result)){
                $ins_name = $row['ins_name'];
                $ins_address = $row['ins_address'];
                $ins_mobile = $row['ins_mobile'];
            }
                
            ?>
            <div class="bottom">
                    <h3> <?php echo $ins_name; ?> </h3>
                    <p> Institution Address: <?php echo $ins_address;?> ||  Institution Mobile: <span> <?php echo $ins_mobile?></span></p>
        <div class="body">
            <div class="body_left">
                <div><button class="info_button"><a href="index.php">Home</a> </button> </div>
                <div><button class="info_button"><a href="instution_info.php">Instution Information</a> </button> </div>
                <div><button class="info_button"><a href="admission.php"> Student Admissin</a></button> </div>
                <div><button class="info_button"><a href="">Student Information</a> </button> </div>
                <div><button class="info_button"><a href=""> Subject</a></button> </div>
                <div><button class="info_button"><a href="display.php">Mark Distribution</a> </button> </div>
                <div><button class="info_button"><a href="mark.php">Mark Entry</a> </button> </div>
                <div><button class="info_button"><a href="">Exam Informatin</a> </button> </div>
                <div><button class="info_button"><a href=""> Testimonial</a></button> </div>
                <div><button class="info_button"><a href="">Admin Pane</a> </button> </div>
                <div><button class="info_button"><a href="">Exit</a> </button> </div>
               
            </div>
            <div class="body_right">
            <?php include "include/admission2.php"?>
            </div>
        </div>
        
    </div>
  
</body>
</html>