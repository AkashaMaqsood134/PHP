<!DOCTYPE html>
<html>
    <head>
        <title>variable functions in php</title>
    </head>
<body>
  <?php
      function sum($x, $y){
        $sum = $x + $y;
        echo $sum;
      }
      
    $sumVariable = "sum";
    $sumVariable(2, 3);

    ?>

    
</body>

</html>