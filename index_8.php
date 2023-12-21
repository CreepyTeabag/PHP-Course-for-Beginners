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

   $bool = true;
   $a = 1;
   $b = 4;

   $result = match($a) {
      1, 3, 5 => "Variable a is equal to one or three or five!",
      2 => "Variable a is equal to two!",
   };

   echo $result;

   /* switch ($a) {
      case 1:
         echo "The first case is correct!";
         break;
      case 2: 
         echo "The second case is correct!";
         break;
      case 3: 
         echo "The third case is correct!";
         break;
      default:
         echo "None of the conditions were true!";
         break;
   } */

   /* if ($a < $b && !$bool) {
      echo "First condition is true!";
   } else if ($a > $b && $bool) {
   // } elseif ($a > $b && $bool) { // elseif works exactly the same as else if
      echo "Second condition is true!";
   } else {
      echo "None of the conditions were true!";
   } */

   ?>

</body>
</html>