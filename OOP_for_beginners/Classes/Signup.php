<?php

class Signup extends Dbh {
   private $username;
   private $pwd;

   public function __construct($username, $pwd) {
      $this->username = $username;
      $this->pwd = $pwd;
   }

   // private function connect() {}

   private function insertUser() {
      $query = "INSERT INTO users ('username', 'pwd') VALUES (:username, :pwd)";
      $stmt = $this->connect()->prepare($query); // will access the "connect" method from this Dbh class or it'll look for it in the paernt class if it doesn't exist here (or if we use parent::connect())
      
      // $stmt = parent::connect()->prepare($query);
      $stmt->bindParam(":username", $this->username);
      $stmt->bindParam(":pwd", $this->pwd);
      $stmt->execute();
   }

   private function isEmptySubmit() {
      if (isset($this->username) && isset($this->pwd)) {
      return false;
      } else {
      return true;
      }
   }

   public function signupUser() {
      // Error handlers
      if ($this->isEmptySubmit()) {
         header("Location: " . $_SERVER['DOCUMENT_ROOT'] . '/index.php');
         die();
      }

      // If no errors, signup user
      $this->insertUser();
   }
}