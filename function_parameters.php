<!DOCTYPE html>
<html>
    <head>
        <title>functions with parameters in php</title>
    </head>
<body>
  <?php
      function sum($x, $y){
        $sum = $x + $y;
        echo $sum;
      }

      //function with default values
      function test($f = "first" , $l = "last"){
        echo "</br>" . $f. " " .$l;
      }

    sum(3, 4);
    test();
    ?>

    
</body>

</html>