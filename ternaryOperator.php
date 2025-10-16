<!Doctype html>
<html>
  <head>
    <title>Ternary operator in php</title>
</head>
    <body>
<?php
   $x = 20;
   ($x>30)?$y = "ture":$y = "false";
   echo $y;

   $y = ($x>30)? "ture": "false";
   echo $y;
?>

</body>

</html>