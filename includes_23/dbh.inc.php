<?php

$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

try {
   $pdo = new PDO($dsn, $dbusername, $dbpassword);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // if we get an error - we want ot throw an exception.
} catch (PDOException $e) { // take that exception here
   echo "Connection failed: " . $e->getMessage(); // echo the exception message
}