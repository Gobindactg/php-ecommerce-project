<?php

include "bangla_gpa.php";
include "english_gpa.php";
include "math_gpa.php";
include "science_gpa.php";
include "bob_gpa.php";
include "religion_gpa.php";

if($bangla1> 32 && $english1> 32 && $math1> 32 && $science1> 32 && $bob1> 32 && $religion1> 32){
$z = $b + $e + $m + $bo + $s + $r;
$g = $z / 6;
 echo round($g, 2);
  }else{
    echo 0;
  } 
  echo $g;

?>