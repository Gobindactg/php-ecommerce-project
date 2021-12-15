<?php

     if($gpa>=5){
      $grade = 'A+';
        
      }
      elseif ($gpa>=4) {
        $grade = "A";
      }
      elseif ($gpa>=3.50) {
          $grade = "A-";
      }
      elseif ($gpa>=3) {
          $grade = "B";
      }
      elseif ($gpa>=2) {
          $grade = "C";
      }
      elseif ($gpa>=1) {
          $grade = "D";
       
    }else{
        $grade = "F";
    }

      
?>