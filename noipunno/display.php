<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/down.css">
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
            </div>
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
            <?php
include 'include/db.inc.php';
?>
<script src="js/jquery.js"></script>

<script>
    function activate(element){
     //   alert('element');
    }
    function updateValue(element,column,id){
      //  console.log(element.inlierText);
      var value = element.innerText
      //console.log(value+column+id)
      $.ajax({
          url:'include/backend.php',
          type:'post',
          data:{
              value: value,
              column: column,
              id: id
          },
          success: function(php_result){
              console.log(php_result);
          }
      })
    }
</script>
<div class="container">
    <h2 style="text-align:center; padding-top:25px">Information Of Staff</h2>
<table class="table">
    
    <thead class="thead-light">
        <tr class="show">
            
            <th>Frist Name</th>
            <th>Last Name</th>
            <th>Title</th>
            <th>Degination</th>
            <th>salary</th>
            <th>village</th>
          
        </tr>
    </thead>


<?php

$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error()); 
}

$query = "SELECT * FROM inline_table";
$result = mysqli_query($connection,$query);
$count = mysqli_num_rows($result);
while ($row = mysqli_fetch_assoc($result)){
            
        $fname= $row['fname'];
        $lname= $row['lname'];
        $title = $row['title'];
        $degination = $row['degination'];
        $salary = $row['salary'];
        $village = $row['village'];
        $id = $row['id'];

      
?>
  
<tbody class="thead-light">
    <tr>
    <td><div contenteditable="true" onBlur="updateValue(this,'fname','<?php echo $id?>')" onClick="activate(this)"><?php echo $fname;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'lname','<?php echo $id?>')" onClick="activate(this)"><?php echo $lname;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'title','<?php echo $id?>')" onClick="activate(this)"><?php echo $title;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'degination','<?php echo $id?>')" onClick="activate(this)"><?php echo $degination;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'salary','<?php echo $id?>')" onClick="activate(this)"><?php echo $salary;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'village','<?php echo $id?>')" onClick="activate(this)"><?php echo $village;?></div></td>
  
    
    </tr>
</tbody>
<?php

}
?>
</table>
<div contenteditable="true" onBlur="updateValue(this,'student_roll')" onClick="activate(this)"><?php echo $fname;?></div>
</div>

            </div>
        </div>
        
    </div>
  
</body>
</html>