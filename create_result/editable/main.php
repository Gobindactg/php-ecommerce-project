<form action=" " method="post">
<input type="number" name="bangla">
<input type="number" name="english">
<input type="number" name="math">
<input type="number" name="science">
<input type="number" name="bob">
<input type="number" name="religion">

<input type="submit" value="submit">
</form>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
           
  <table class="table table-dark">
    <thead>
      <tr>
        <th>Name</th>
        <th>Roll</th>
        <th>Bangla</th>
        <th>English</th>
        <th>Math</th>
        <th>Science</th>
        <th>Bangladesh and Global Study</th>
        <th>Religion</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td><?php require "bangla.php" ?></td>
        <td><?php require "english.php" ?></td>
        <td><?php require "math.php" ?></td>
        <td><?php require "science.php" ?></td>
        <td><?php require "bob.php" ?></td>
        <td><?php require "religion.php" ?></td>

      </tr>
    
    </tbody>
  </table>
</div>

</body>
</html>

<?php require "bangla.php" ?>