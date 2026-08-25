<?php
$a = [51, 16, 33, 2, 14, 21];
$b = [33, 9, 56, 21, 39, 21];

$c = [];

if(count($a) == count($b)){
   for ($i = 0, $j = 0, $k = 0; $i < count($a); $i++, $j++, $k++){
      $c[$k] = $a[$i] + $b[$j];
   }

   echo "Resultant array is:";
   echo "[" . implode(", ", $c) . "]" ;
} 
?>