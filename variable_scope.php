<!DOCTYPE html>
<html>
    <head>
        <title>Variable scope in php</title>
    </head>
<body>
  <?php

      $x = 10;

      function display(){
        global $x ;
        echo $x;
      }
      
   display(1); 


    ?>

    
</body>

</html>