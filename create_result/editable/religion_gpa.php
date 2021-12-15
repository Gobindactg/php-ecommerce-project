


<?php


$rm = $religion;

if($religion>=80){
    
 $rgpa = '5.00';
 $r = 5;
 $rgrade = "A+";
 $rm = $religion;
  
}
elseif ($religion>=70) {
  $rgpa = "4.00";
  $r = 4;
  $rgrade = "A";
  $rm = $religion;
}
elseif ($religion>=60) {
    $rgpa = "3.50";
    $r = 3.50;
    $rgrade = "A-";
    $rm = $religion;
}
elseif ($religion>=50) {
    $rgpa = "3.00";
    $r = 3;
    $rgrade = "B";
    $rm = $religion;
}
elseif ($religion>=40) {
    $rgpa = "2.00";
    $r = 2;
    $rgrade = "C";
    $rm = $religion;
}
elseif ($religion>=33) {
    $rgpa = "1.00";
    $r = 1;
    $rgrade = "D";
    $rm = $religion;
}
else {
    $rgpa = "00";
    $r = 0;
    $rgrade = "F";
    $rm = $religion;
}



?>