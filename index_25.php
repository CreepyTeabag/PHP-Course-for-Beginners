<?php
session_start();

$_SESSION["username"] = "Krossing";
$_SESSION["test"] = "Test";
unset($_SESSION["username"]);
session_unset();

session_destroy();
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
   echo $_SESSION["username"];
   echo $_SESSION["test"];
   ?>

</body>
</html>