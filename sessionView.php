<?php
  session_start();

  print_r($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
        if(isset($_SESSION["favcolor"])){
            echo "Favorite Color :" . $_SESSION["favcolor"];
        }
    ?>
</body>
</html>