<?php
declare(strict_types=1);
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

   <h3>Signup</h3>

   <form action="includes_20/formhandler.inc.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <input type="text" name="email" placeholder="E-Mail">
      <button>Signup</button>
   </form>

</body>
</html>