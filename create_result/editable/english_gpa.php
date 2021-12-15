
  <?php
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
    
?>