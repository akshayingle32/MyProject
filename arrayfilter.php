<?php
   function odd($var) {
      return($var & 1);
   }
   
   function even($var) {
      return(!($var & 1));
   }
   
   $input1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
   $input2 = array(6, 7, 8, 9, 10, 11, 12);
   
   echo "Odd Values:\n";
   print_r(array_filter($input1, "odd"));
   
   echo "Even Values:\n";
   print_r(array_filter($input2, "even"));
?>