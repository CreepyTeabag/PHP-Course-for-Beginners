<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <?php
   // Scalar types (contains one value) + their default values:
   $string = "";
   $integer = 0;
   $float = 2.5667; // The default is 0
   $boolean = false;

   // Array type + default value
   $names = array("Daniel", "Bella", "Frida");
   $names = ["Daniel", "Bella", "Frida"];

   $array = [];

   // Object type + default value
   // $object = new Car();
   // $object = null;

   $name = "John Doe";
   $test = $name;
   ?>

   <p>Hi! My name is <?php echo $test; ?>, and I'm learning PHP!</p>
</body>
</html>