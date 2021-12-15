


<?php

$sm = $science;
if($science >=80){
    
 $sgpa = '5.00';
 $s = 5;
 $sgrade = "A+";
 $sm = $science;
  
}
elseif ($science >=70) {
  $sgpa = "4.00";
  $s = 4;
  $sgrade = "A";
  $sm = $science;
}
elseif ($science >=60) {
    $sgpa = "3.50";
    $s = 3.50;
    $sgrade = "A-";
    $sm = $science;
}
elseif ($science>=50) {
    $sgpa = "3.00";
    $s = 3;
    $sgrade = "B";
    $sm = $science;
}
elseif ($science>=40) {
    $sgpa = "2.00";
    $s = 2;
    $sgrade = "C";
    $sm = $science;
    
}
elseif ($science>=33) {
    $sgpa = "1.00";
    $s = 1;
    $sgrade = "D";
    $sm = $science;
}
else {
    $sgpa = "00";
    $s = 0;
    $sgrade = "F";
    $sm = $science;
}




?>