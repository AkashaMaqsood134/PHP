<!DOCTYPE html>
<html>
    <head>
        <title>str split and chunk split in php</title>
    </head>
<body>
  <?php
    $a = "Akasha";

    $str = str_split($a, 3);
    
    echo "<pre>";
    print_r($str);
    echo "</pre>";

    $str1 = chunk_split($a, 3, "-");

    echo $str1;
    ?>

    
</body>

</html>