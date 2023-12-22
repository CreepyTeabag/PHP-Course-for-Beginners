<?php

// if the user opened this file the legitimate way, by submitting the form, we try to register the user in our DB
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   // we take the submitted data
   $username = $_POST["username"];
   $pwd = $_POST["pwd"];
   $email = $_POST["email"];

   try {
      // connect to the database
      require_once "dbh.inc.php"; // this basically takes all the code from dbh.inc.php and pastes it here

      //Bad practice
      // $query = "INSERT INTO users (username, pwd, email) 
      //           VALUES ($username, $pwd, $email);";

      // create the query with non-named parameters
      // $query = "INSERT INTO users (username, pwd, email) 
      //           VALUES (?, ?, ?);";

      // create the query with named parameters
      $query = "INSERT INTO users (username, pwd, email) 
                VALUES (:username, :pwd, :email);";

      // prepare the query
      $stmt = $pdo->prepare($query);

      // execute the query with our data (we separated it into two steps for safety)
      // non-named parameters HAVE to be in the same order as the parameters in the query!
      // $stmt->execute([$username, $pwd, $email]);

      // execute the query with our data (we separated it into two steps for safety)
      // non-named parameters HAVE to be in the same order as the parameters in the query!
      $stmt->bindParam(":username", $username);
      $stmt->bindParam(":pwd", $pwd);
      $stmt->bindParam(":email", $email);
      $stmt->execute();

      /* Freeing up resources right away. It'll be done automatically, 
      but it's considered best practice to do it manually right away. */
      $pdo = null;
      $stmt = null;

      // go back to the form
      header("Location: ../index.php");

      // stop everything else from executing
      die();
   } catch (PDOException $e) {
      // if we couldn't do what we wanted to do - then show the error
      die("Query failed: " . $e->getMessage());
   }
// if the user opened this file the illegitimate way - we send them where they came from (back to the form)
} else {
   header("Location: ../index.php");
}