<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>

   <?php
   // User defined variable
   $name = "test";

   // Superglobal (predefined) variables
   echo $_SERVER["DOCUMENT_ROOT"];
   echo "<br>";
   echo $_SERVER["PHP_SELF"];
   echo "<br>";
   echo $_SERVER["SERVER_NAME"];
   echo "<br>";
   echo $_SERVER["REQUEST_METHOD"];

   echo "<br>";
   echo $_GET["name"];
   echo "<br>";
   echo $_GET["eyecolor"];

   // echo $_POST[];
   echo "<br>";
   echo $_REQUEST["name"];

   // echo "<br>";
   // echo $_FILES["name"];

   // echo "<br>";
   // echo $_COOKIE["name"];

   echo "<br>";
   $_SESSION["username"] = "Krossing";
   echo $_SESSION["username"];

   // $_ENV[];

   // So, all of them are:
   /* 
   $_SERVER[""];
   $_GET[""];
   $_POST[""];
   $_REQUEST[""];
   $_FILES["name"];
   $_COOKIE["name"];
   $_SESSION[""];
   $_ENV[""]; 
   */
   ?>

</body>
</html>