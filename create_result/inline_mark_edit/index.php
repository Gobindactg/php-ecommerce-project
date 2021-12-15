<?php
include 'db.inc.php'
?>
<script src="js/jquery.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/toutput.css">
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
    
    <thead class="thead-dark">
        <tr class="show">
            <th>Roll</th>
            <th>class</th>
            <th>Group</th>
            <th>Year</th>
            <th>Section</th>
            <th>Bangla</th>
            <th>English</th>
            <th>Math </th>
            <th>Science </th>
            <th>Bob</th>
            <th>religion </th>
            <th>Music</th>
            <th>Social </th>
            <th>Expressive </th>
            
          
        </tr>
    </thead>


<?php

$connection = mysqli_connect('localhost','root','','user_info');

if(!$connection){
    die("Not connected". mysqli_error()); 
}

$query = "SELECT * FROM mark_table";
$result = mysqli_query($connection,$query);
$count = mysqli_num_rows($result);
while ($row = mysqli_fetch_assoc($result)){
            
       $roll = $row['student_roll'];
       $class = $row['student_class'];
       $group = $row['class_group'];
       $year = $row['academy_year'];
       $section = $row['section'];
       $bangla = $row['bangla_mark'];
       $english = $row['english_mark'];
       $math =  $row['math_mark'];
       $science = $row['science_mark'];
       $bob = $row['bob_mark'];
       $religion = $row['religion_mark'];
       $music = $row['music_mark'];
       $social = $row['social_mark'];
       $expressive = $row['expressive_mark'];
        $id = $row['id'];

      
?>
  
<tbody class="thead-light">
    <tr class="toutput">
    <td><div contenteditable="true" onBlur="updateValue(this,'student_roll','<?php echo $id?>')" onClick="activate(this)"><?php echo $roll;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'student_class','<?php echo $id?>')" onClick="activate(this)"><?php echo $class;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'class_group','<?php echo $id?>')" onClick="activate(this)"><?php echo $group;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'academy_year','<?php echo $id?>')" onClick="activate(this)"><?php echo $year;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'section','<?php echo $id?>')" onClick="activate(this)"><?php echo $section;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'bangla_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $bangla;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'english_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $english;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'math_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $math;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'science_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $science;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'bob_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $bob;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'religion_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $religion;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'music_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $music;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'social_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $social;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'expressive_mark','<?php echo $id?>')" onClick="activate(this)"><?php echo $expressive;?></div></td>
    
  
    
    </tr>
</tbody>
<?php

}
?>
</table>

</div>
