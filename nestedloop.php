<!Doctype html>
<html>
  <head>
    <title>Nested loop in php</title>
</head>
    <body>
<?php

  for($i = 0; $i<10 ; $i++){
    for($j = 1 ; $j<=10 ; $j++){
        echo "inner loop";
    }
    echo "outer loop</br>";
  }
?>

</body>

</html>