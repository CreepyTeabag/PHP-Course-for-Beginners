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

   function sayHello(string $name = "Jane") {
      return "Hello " . $name . "!";
   }

   $test =  sayHello("Johnny");
   echo $test;
   echo "<br>";

   $test = "word";
   function calculator(int $num01, int $num02) {
      // $result is a local scoped variable
      $result = $num01 + $num02;
      
      // global $test; // without this line of code
      // return $test; // this will be UNDEFINED VARIABLE
      return $result;
   }

   $test =  calculator(3, 7);
   echo $test;

   ?>

</body>
</html>