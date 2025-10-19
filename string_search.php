<!DOCTYPE html>
<html>
    <head>
        <title>Str search and find position in php</title>
    </head>
<body>
  <?php
  $str = "Hello world. The world is nice";

$newStr = strpos($str, "world");

echo "<pre>";
print_r($newStr);
echo "</pre>";

$newStr = strpos($str, "world", 10);

echo "<pre>";
print_r($newStr);
echo "</pre>";

$newStr = strpos($str, "world", -20); //--- use negative start value

echo "<pre>";
print_r($newStr);
echo "</pre>";

/*------- strrpos --- Finds the position of the last occurrence------- */
$newStr = "strpos :" . strpos($str, "world");

echo "<pre>";
print_r($newStr);
echo "</pre>";

$newStr = "strrpos :" . strrpos($str, "world");

echo "<pre>";
print_r($newStr);
echo "</pre>";

/*------- stripos --- Find the position of the first occurrence------- */
$newStr = "stripos :" . stripos($str, "WORLD");

echo "<pre>";
print_r($newStr);
echo "</pre>";

$newStr = "stripos :" . stripos($str, "WORLD", 10);

echo "<pre>";
print_r($newStr);
echo "</pre>";

/*------- strripos --- Finds the position of the last occurrence------- */
$newStr = "strripos :" . strripos($str, "WORLD");

echo "<pre>";
print_r($newStr);
echo "</pre>";
    ?>


    
</body>
</html>