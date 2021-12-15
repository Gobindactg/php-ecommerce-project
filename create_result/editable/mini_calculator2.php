<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mini_calculator.css">
    <title>Document</title>
</head>
<body>

<?php

   $nine =$_POST['nine'];
               
               echo $nine;
    
        




?>



<div class="cal">
    <form action="?" method="post">
        <table>
            <tr>
                <td><input type="text" value=""></td>
            </tr>
            <tr>
                <td><input type="button" name="submit" value="9"></td>
                <td><input type="button" name="submit1" value="8"></td>
                <td><input type="button" name="submit2" value="7"></td>
                <td><input type="button" name="submit3" value="6"></td>
            </tr>
        </table>
   <!--<div class="display">
        <input type="text" value="">
        </div>
      <input type="submit" name="submit" value="AC">
      <input type="submit" name="nine" value="9">
      <input type="button" name="eight" value="8">
      <input type="button" name="seven" value="7">
      <input type="button" name="add" value="+"><br>
      <input type="button" name="six" value="6">
      <input type="button" name="five" value="5">
      <input type="button" name="four" value="4">
      <input type="button" name="less" value="-"><br>
      <input type="button" name="three" value="3">
      <input type="button" name="two" value="2">
      <input type="button" name="one" value="1">
      <input type="button" name="divide" value="/"><br>
      <input type="button" name="zero" value="0">-->
    </form>
<?php
   
?>
</div>
</body>
</html>
