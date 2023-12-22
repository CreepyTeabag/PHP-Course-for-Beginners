<?php

// The method here is used for sensitive data, but not for passwords.

$sensitiveData = "Krossing";

// Generate random salt
$salt = bin2hex(random_bytes(16)); // generates 16 bytes of data which are then converted into hexadecimal
$pepper = "ASecretPepperString";

echo "<br>" . $salt;

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

echo "<br>" . $hash;

 /* ----------------------------------- */

$sensitiveData = "Krossing";

$storedSalt = $salt;
$storedHash = $hash;
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $storedSalt . $pepper;

$verificationHash = hash("sha256", $dataToHash);

if ($storedHash === $verificationHash) {
   echo "<br>";
   echo "The data are the same!";
   echo "<br>";
   echo $storedHash;
   echo "<br>";
} else {
   echo "<br>";
   echo "The data are not the same";
}