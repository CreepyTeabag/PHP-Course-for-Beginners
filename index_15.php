<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css" />
   <title>Document</title>
</head>
<body>

   <?php

   /* $test = 10;
   for ($i = 0; $i < $test; $i++) {
      echo "Iteration #" . $i . "<br>";
   } */

   /* $test = 10;
   // won't run if $test === 10, because right from the beginning the condition is false
   while ($test < 10) {
      echo $test;
      $test++;
   }
   
   do {
      echo $test;
      $test++;
   } while ($test < 10); // will run at least one whether the condition is true or false */

   $fruits = array("Apple", "Banana", "Orange");
   
   foreach ($fruits as $fruit) {
      echo "This is a " . $fruit . "<br>";
   }
   
   
   $fruits2 = array(
      "Apple" => "Red", 
      "Banana" => "Yellow", 
      "Orange" => "Orange");
   
   foreach ($fruits2 as $fruit => $color) {
      echo "This is a " . $color . " " . $fruit . "<br>";
   }

   ?>

</body>
</html>