


<?php

$bom = $bob;

if($bob>=80){
    
 $bobgpa = '5.00';
 $bo = 5;
 $bobgrade = "A+";
 $bom = $bob;
  
}
elseif ($bob>=70) {
  $bobgpa = "4.00";
  $bo = 4;
  $bobgrade = "A";
  $bom = $bob;
}
elseif ($bob>=60) {
    $bobgpa = "3.50";
    $bo = 3.50;
    $bobgrade = "A-";
    $bom = $bob;
}
elseif ($bob>=50) {
    $bobgpa = "3.00";
    $bo = 3;
    $bobgrade = "B";
    $bom = $bob;
}
elseif ($bob>=40) {
    $bobgpa = "2.00";
    $bo = 2;
    $bobgrade = "C";
    $bom = $bob;
}
elseif ($bob>=33) {
    $bobgpa = "1.00";
    $bo = 1;
    $bobgrade = "D";
    $bom = $bob;
}
else {
    $bobgpa = "00";
    $bo = 0;
    $bobgrade = "F";
    $bom = $bob;

}

   


?>