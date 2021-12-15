<!DOCTYPE html>
<html>
<body>

Name: 
<input type="number" id="a" value="" oninput="myFunction()">
<input type="number" id="b" value="" oninput="myFunction()">


<p id="c" name="total" value=""></p>
<p id="d" name="total" value=""></p>
<form action="" method="post">
<input type="text" id="data" name="data" value="">
<input type="submit" name="submit" value="submit">
</form>



<script>
function myFunction() {
  var m = Number(document.getElementById("a").value);
  var n = Number(document.getElementById("b").value);
 
  var t = +m + +n;
  
  document.getElementById("c").innerHTML = t;
  document.getElementById("data").value = t;

}
</script>

</body>
</html>