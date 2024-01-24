<?php
   $names=array("Papu","Sona","Tina","Ammu","Liya");
   echo "<b>Normal array:</b><br>";
   print_r($names);
   echo "<br><br><b>Ascending order:</b><br>";
   asort($names);
   print_r($names);
   echo "<br><br><b>Descending order:</b><br>";
   arsort($names);
   print_r($names);
?>