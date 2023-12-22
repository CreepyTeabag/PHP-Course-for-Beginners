<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style_6.css" />
   <title>Document</title>
</head>
<body>

<main>
   <!-- Don't do this! It's prone to hacking -->
   <!-- <form action="<?php /*echo $_SERVER["PHP_SELF"];*/?>" method="post"> -->

   <form action="includes_6/formhandler.php" method="post">
      <label for="firstname">Firstname ?</label>
      <input id="firstname" type="text" name="firstname" placeholder="Firstname ... ">

      <label for="lastname">Lastname ?</label>
      <input id="lastname" type="text" name="lastname" placeholder="Lastname ... ">

      <label for="favouritepet">Favourite Pet ?</label>
      <select id="favouritepet" name="favouritepet">
         <option value="none">None</option>
         <option value="dog">Dog</option>
         <option value="cat">Cat</option>
         <option value="bird">Bird</option>
      </select>

      <!--This one is needed for the old way of checking if we got to the page by submitting the form (the old way: if (isset($_POST["submit"])) {})-->
      <!-- <button type="submit" name ="submit">Submit</button> -->
      <button type="submit">Submit</button>
   </form>
</main>

</body>
</html>