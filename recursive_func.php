<!DOCTYPE html>
<html>
    <head>
        <title>Recursive functions in php</title>
    </head>
<body>
  <?php
      /* function display($x){
       if ($x<=5){
        echo $x;
       }
       display($x++);
      }
      
   display(1); */

      function factorial($n){

        if ($n==0){
            return 1;
        }
        else{
            return ($n * factorial($n - 1));
        }

      }

      echo factorial(5);

    ?>

    
</body>

</html>