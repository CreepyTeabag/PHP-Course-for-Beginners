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

   <h3>Change account</h3>

   <form action="includes_23/userupdate.inc.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <input type="text" name="email" placeholder="E-Mail">
      <button>Update</button>
   </form>

   <h3>Delete account</h3>

   <form action="includes_23/userdelete.inc.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <button>Delete</button>
   </form>
   
   <?php
   
   ?>

</body>
</html>