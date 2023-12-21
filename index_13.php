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

/*    $test ="Jane"; // global
   $test2 ="Jane2"; // global
   echo $test;
   echo "<br>";

   function myFunction($test) {
      global $test2;
      echo $test2;
      echo "<br>";

      // Define a local variable
      $localVar = "Hello, world!";

      // echo $test; // undefined variable

      // Use the local variable
      return $localVar; // Output: Hello, world!
   }

   echo myFunction($test);
   echo "<br>";


   function myFunction2() {
      $localVar = "Hello, world!";

      return $GLOBALS["test2"];
   }

   echo myFunction2(); */

   /* $test = "Jane";
   function myFunction() {
      // Declare a static variable
      static $staticVar = 0;

      // Increment the static variable
      $staticVar++;

      // Use the static variable
      echo $staticVar;
   }

   echo myFunction();
   echo myFunction();
   echo myFunction(); */

   class MyClass {
      // Define a class variable
      public $classVar = "Hello, world!";

      // Define a class method
      public function myMethod() {
         // Use the class variable
         echo $this->classVar; // Output: Hello, world!
      }
   }

   // echo MyClass::$classVar;

   ?>

</body>
</html>