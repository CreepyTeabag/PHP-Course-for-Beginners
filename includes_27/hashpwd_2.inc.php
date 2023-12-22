<?php

// The method here is used for hashing passwords.

// $pwd = $_POST["password"]; // this info usually comes from the form
$pwdSignup = "Krossing";

$options = [
   'cost' => 12
];

// password_hash($pwd, PASSWORD_DEFAULT);
$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options); 


$pwdLogin = "Krossing";
password_verify($pwdLogin, $hashedPwd);

if (password_verify($pwdLogin, $hashedPwd)) {
   echo "They are the same!";
} else {
   echo "They are NOT the same!";
}