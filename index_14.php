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

   $name1 = "Dani";
   $name1 = "Judy";
   echo $name1;
   echo "<br>";

   define("PI", 3.14);
   // define("PI", 4.14); // error
   define("NAME", "Jane");
   define("IS_ADMIN", true);
   echo PI;
   echo "<br>";
   echo NAME;
   echo "<br>";
   echo IS_ADMIN;
   echo "<br>";

   function test() {
      echo PI;
   }

   test();

   ?>

</body>
</html>