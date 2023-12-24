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
      /* require_once 'Classes/Car.php';

      $car01 = new Car("BMW", "green");
      echo $car01->setBrand("Volvo");
      echo $car01->getBrand();
      $car01->setColor("yellow"); // yellow
      $car01->setColor("pink"); // green, because pink is not allowed
      echo $car01->getColor(); */

      ?>
      <form action="includes/signup.inc.php" method="post">
         <input type="text" name="username">
         <input type="password" name="pwd">
         <button>Signup/button>
      </form>

</body>
</html>