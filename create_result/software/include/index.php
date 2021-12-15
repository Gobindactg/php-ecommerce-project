<?php
include 'db.inc.php'
?>
<script src="../js/jquery.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<script>
    function activate(element){
     //   alert('element');
    }
    function updateValue(element,column,id){
      //  console.log(element.inlierText);
      var value = element.innerText
      //console.log(value+column+id)
      $.ajax({
          url:'backend.php',
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
