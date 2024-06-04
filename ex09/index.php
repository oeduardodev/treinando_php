<?php 
   $baralhos =  array("exodia","toon","galaxy");
   $keys = array ("Meta", "anti-meta", "casual");
   $tipos = array_combine($keys, $baralhos);
   print_r($tipos);
   echo "<br>";
   print_r($baralhos);
   echo "<br>";
   echo array_pop($baralhos); 
   echo "<br>";
   echo array_unshift($baralhos, "blue dragon"); 
   echo array_push($baralhos, "dark magician"); 
   echo "<br>";
?>