


<?php


$mm = $math;

if($math>=80){
    
 $mgpa = '5.00';
 $m = 5;
 $mgrade = "A+";
 $mm = $math;
  
}
elseif ($math>=70) {
  $mgpa = "4.00";
  $m = 4;
  $mgrade = "A";
  $mm = $math;
}
elseif ($math>=60) {
    $mgpa = "350";
    $m = 3.5;
    $mgrade = "A-";
    $mm = $math;
}
elseif ($math>=50) {
    $mgpa = "3.00";
    $m = 3;
    $mgrade = "B";
    $mm = $math;
}
elseif ($math>=40) {
    $mgpa = "2.00";
    $m = 2;
    $mgrade = "C";
    $mm = $math;
}
elseif ($math>=33) {
    $mgpa = "1.00";
    $m = 1;
    $mgrade = "D";
    $mm = $math;
}
else {
    $mgpa = "00";
    $m = 0;
    $mgrade = "F";
    $mm = $math;
}


    

?>