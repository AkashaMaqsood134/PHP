<!DOCTYPE html>
<html>
    <head>
        <title>For each in php</title>
    </head>
<body>
  <?php
    $arr = array(10,20,30);
    $color = ["Red", "Pink", "Green"];

    $marks = ["john" => 20,
                "ben" => 30];

    foreach($arr as $value){
        echo $value . "</br>";
    }

    foreach($color as $value){
        echo $value . "</br>";
    }

    foreach($marks as $john => $value)
    {
        echo $value . "</br>";
    }

    ?>

    
</body>

</html>