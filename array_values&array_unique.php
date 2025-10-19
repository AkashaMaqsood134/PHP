<!Doctype html>

<html>
   <head>
   <title>Array Values and array unique</title>
</head>
<body>

<?php
$a1 = array("a"=>"red","b"=>"green","c"=>"red","d"=>"yellow");

$newArray = array_values($a1);

echo "<pre>";
print_r($newArray);
echo "</pre>";

//array unique

$newArray1 = array_unique($a1);

echo "<pre>";
print_r($newArray1);
echo "</pre>";

?>

</body>

</html>