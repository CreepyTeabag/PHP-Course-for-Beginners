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

   // String functions
   /* $string = "Hello World!";

   echo strlen($string); // 12
   echo "<br>";

   echo strpos($string, "o"); // 4
   echo "<br>";
   
   // echo str_replace("World", "bro", $string);
   // echo "<br>";
   
   echo strtolower($string); // hello world!
   echo "<br>";

   echo strtoupper($string); // HELLO WORLD!
   echo "<br>";

   echo substr($string, 2, 2); // ll
   echo "<br>";
   echo substr($string, 2, -2); // llo Worl
   echo "<br>";
   
   print_r(explode(" ", $string)); // llo Worl
   echo "<br>"; */


   // Math functions
   /* $number = -5.5;

   echo Abs($number); // 5.5
   echo "<br>";

   echo round($number); // -6
   echo "<br>";

   echo pow(2, 3); // 8 (2^3)
   echo "<br>";

   echo sqrt(81); // 9 - square root
   echo "<br>";

   echo rand(1, 100); // random number between two numbers
   echo "<br>"; */


   // Array functions
   /* $array1 = ["apple", "banana", "orange"];
   $array2 = ["kiwi"];

   echo count($array1); // 3
   echo "<br>";

   echo is_array($array1); // true (1)
   echo "<br>";

   array_push($array1, "kiwi");
   print_r($array1);
   echo "<br>";

   array_pop($array1);
   print_r($array1);
   echo "<br>";

   print_r(array_reverse($array1));
   echo "<br>";

   print_r(array_merge($array1, $array2)); // ["apple", "banana", "orange","kiwi"]
   echo "<br>"; */


   // Date & time functions
   echo date("Y-m-d H:i:s");
   echo "<br>";

   echo time(); // unix timestamp
   echo "<br>";

   $date = "2023-12-21 10:00:00";
   echo strtotime($date);

   ?>

</body>
</html>