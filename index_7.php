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
   // String operator
   $a = "Hello";
   $b = "World!";

   $c = $a . " " . $b;
   echo $c;
   echo "<br>";

   // Arithmetic operators
   echo 10 % 3; // 1
   echo "<br>";
   echo 10 ** 3; // 1000
   echo "<br>";
   echo (1 + 2) * (4 - 2);
   echo "<br>";
   
   // Assignment operators
   $a = 2;
   $a += 4;
   $a *= 2;

   // Comparison operators and Logical operators

   $a = 4;
   $b = 4;

   $c = 2;
   $d = 6;

   if ($a != $b) {
   // if ($a <> $b) { // you can write it like this, too
      echo  "True!";
      echo "<br>";
   }

   // if ($a == $b or $c ==$d and $a == $c) {
   if ($a == $b || $c ==$d && $a == $c) { // true
      echo  "True!";
      echo "<br>";
   }

   // Incrementing / decrementing operators
   $a = 1;
   echo ++$a; // add 1 and then echo
   echo $a++; // echo and then add 1

   ?>

</body>
</html>