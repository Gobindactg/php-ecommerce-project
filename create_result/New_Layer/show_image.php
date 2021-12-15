<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/blog.js"></script>
    <title>Document</title>
</head>
<body>
    

<form action="" method="post"  enctype="multipart/form-data">

        <input type="file" accept="image/*" onchange="loadFile(event)">
	    <img style="width:150px; height:150px;" id="output"/>
    
</form>

 
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) 
    }
  };

</script>

</body>
</html>

      
