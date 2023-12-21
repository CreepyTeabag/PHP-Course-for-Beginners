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
   $fruits = [
      "Apple", 
      "Banana", 
      "Cherry",
   ];

   $test = [
      "Mango",
      "Strawberry",
   ];

   /* unset($fruits[1]);
   // echo $fruits[1]; //Error, because it doesn't exist anymore

   array_splice($fruits, 0, 1);

   echo $fruits[0];

   $fruits[] = "Orange";
   $fruits[1] = "Orange";
   
   array_push($fruits, "Mango"); // = $fruits[] = "Mango"; */

   // array_splice($fruits, 2, 0, "Mango");
   array_splice($fruits, 2, 0, $test);

   /* $tasks = [
      "laundry" => "Daniel",
      "trash" => "Frida",
      "vacuum" => "Basse",
      "dishes" => "Bella",
   ];

   echo $tasks["laundry"];
   print_r($tasks);
   
   echo count($tasks); // 4
   sort($tasks); // ascending, so from a to z or from 0 to infinity. But it sorts by values and turns keys to numbers, so it return an indexed array instead of associative array.
   print_r($tasks); 
   $tasks["dusting"] = "Tara";
   */

   $food = [
      array("apple", "mango"),
      "banana",
      "cherry",
   ];

   echo $food[0][0]; // apple

   $food2 = [
      "fruits" => array("apple", "banana", "cherry"),
      "meat" => array("chicken", "fish"),
      "vegetables" => array("cucumber", "carrot"),
   ];

   echo $food2["vegetables"][0]; // cucumber

   ?>

</body>
</html>