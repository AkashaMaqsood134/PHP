<!DOCTYPE html>
<html>
    <head>
        <title>constant in php</title>
    </head>
<body>
  <?php
    // for constant variable define(name, value, case-insensitive)
    define("PI", 3.14);
    //define("PI", 3.12); it will give error because constant variable value cannot be changed
    echo PI;            

    ?>
    
</body>

</html>