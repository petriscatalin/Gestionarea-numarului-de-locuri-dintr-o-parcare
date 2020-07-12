<?php
session_start();
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Licenta</title>

    <link rel="stylesheet" type="text/css" href="style.css">


 

  </head>
  <body>
  <h1 style="color:blue;font-family:courier;">
  <?php 

// Echo session variables that were set on previous page
    echo "Welcome " . $_SESSION["email"] . ".<br>";
    ?>

</h1>



<br><br><br><br><br><br><br><br>

  <div class="options">

    <a href="index3.php">Rezevare</a><br>
    <a href="index9.php">Lista rezervari</a>

  </div>

  </body>
</html> 