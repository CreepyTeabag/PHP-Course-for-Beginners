<?php

// var_dump($_SERVER['REQUEST_METHOD']); // string(4) "POST"

// the old way:
// if (isset($_POST["submit"])) {}

// the new way:
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   // sanitizing the incoming data for security
   $firstname = htmlspecialchars($_POST["firstname"]);
   $lastname = htmlspecialchars($_POST["lastname"]);
   $favouritepet = htmlspecialchars($_POST["favouritepet"]);

   if (empty($firstname)) {
      header("Location: ../index.php");
      exit();
   }

   echo "These are the data that the user submitted:";
   echo "<br>";
   echo $firstname;
   echo "<br>";
   echo $lastname;
   echo "<br>";
   echo $favouritepet;

   header("Location: ../index.php");
} else {
   header("Location: ../index.php");
}