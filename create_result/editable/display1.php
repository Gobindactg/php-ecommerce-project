<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ABC</title>
  <style type="text/css">
input,select{width:300px; padding: 5px;}table{width: 100%;border-collapse: collapse;}td{border: 1px solid silver;text-align: center;}
</style>
</head>
<body>
<form method="post" action="">
   <select name="class">
     <option>---Select Class---</option>
     <option>three</option>
     <option>five</option>
     <option>nine</option>
   </select>
   <input type="submit" name="submit" value="Search">
</form>
<br><hr>
<table>
  <tr bgcolor="silver"><td>SL</td><td>Name</td><td>Class</td><td>Ban</td><td>Eng</td><td>Mat</td><td>BOB</td><td>Rel</td><td>Total Mark</td><td>Merit</td> </tr>

<!--Php-->
<?php 
$i=1;
$conn=new mysqli ('localhost', 'root', '', 'user_info');
$class=$_POST['class'];
$sql="SELECT * FROM mark_table ORDER BY total_mark DESC";
foreach ($conn->query($sql) as $row) {
  ?>
  <tr>
    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['student_name'];?></td>
    <td><?php echo $row['class'];?></td>
    <td><?php echo $row['bangla_mark'];?></td>
    <td><?php echo $row['english_mark'];?></td>
    <td><?php echo $row['math_mark'];?></td>
    <td><?php echo $row['science'];?></td>
    <td><?php echo $row['bob'];?></td>
    <td><?php echo $row['religion'];?></td>
    <td><?php echo $row['total_mark'];?></td>
    <td><?php echo $i++;?></td>
    
  </tr>
<?php } ?>
</table>
</body>
</html>