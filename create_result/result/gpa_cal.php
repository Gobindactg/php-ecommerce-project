
        <?php

           
        
    
        if($bangla>=80){
        $bgpa = "5.00";
        $bg = "A+";
        $b = 5;
        $bm = $bangla;
        }
        elseif ($bangla>=70) {
        $bgpa = "4.00";
        $bg = "A";
        $b = 4;
        $bm = $bangla;
        }
        elseif ($bangla>=60) {
            $bgpa = "3.50";
            $bg = "A-";
            $b = 3.50;
            $bm = $bangla;
        }
        elseif ($bangla>=50) {
            $bgpa = "3.00";
            $bg = "B";
            $b = 3;
            $bm = $bangla;
        }
        elseif ($bangla>=40) {
            $bgpa = "2.00";
            $bg = "C";
            $b = 2;
            $bm = $bangla;
        }
        elseif ($bangla>=33) {
            $bgpa = "1.00";
            $bg = "D";
            $b = 1;
            $bm = $bangla;
            
        }
        else {
            $bgpa = "00";
            $bg = "F";
            $b = 0;
            $bm = $bangla;
        }

        $em = $english;
        if($english>=80){
            $egpa = "5.00";             
          
          $e = 5;
          $egrade = "A+";
          $em = $english;
            
          }
          elseif ($english>=70) {
            $egpa = "4.00";
            $e = 4;
            $egrade = "A";
            $em = $english;
          }
          elseif ($english>=60) {
              $egpa = "3.50";
              $e = 3.50;
              $egrade = "A-";
              $em = $english;
          }
          elseif ($english>=50) {
              $egpa = "3.00";
              $e = 3;
              $egrade = "B";
              $em = $english;
          }
          elseif ($english>=40) {
              $egpa = "2.00";
              $e = 3;
              $egrade = "C";
              $em = $english;
          }
          elseif ($english>=33) {
              $egpa = "1.00";
              $e = 1;
              $egrade = "D";
              $em = $english;
          }
          else {
              $egpa = "00";
              $e = 0;
              $egrade = "F";
              $em = $english;
            }


            
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