<?php include "header.php"?>


<form action="" method="get">
<input type="text"  name="user" placeholder=" Enter your name">
<input type="email" name="email" placeholder="Enter your Email">
<input type="submit" name="sumbit" value='submit'>

</form>

<?php

$user = $_REQUEST['user'];
$email = $_REQUEST['email'];
echo $user;
echo "<br>";
echo $email;


?>






<?php include "footer.php"?>