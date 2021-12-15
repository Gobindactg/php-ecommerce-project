<!DOCTYPE html>
<html>
<body>
<form action="" method="post">
Name: 
<input type="number" id="a" value="" oninput="myFunction()">
<input type="number" id="b" value="" oninput="myFunction()">

<input type="number" id="c" value="">
<p id="d" name="total" value=""></p>
<input type="submit" name="submit" value="submit">


</form>


<script>
function myFunction() {
  var m = Number(document.getElementById("a").value);
  var n = Number(document.getElementById("b").value);
  var p = length(document.getElementById("b").value);
  var t = +m + +n;
  
  document.getElementById("c").innerHTML.value = t;
  document.getElementById("d").innerHTML = p;

}
</script>
<?php
 if(isset($_POST['submit'])){
  $total = $_POST['total'];
  echo $total;
 }


?>
</body>
</html>