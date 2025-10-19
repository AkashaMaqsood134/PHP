<!Doctype html>

<html>
   <head>
   <title>Array replace</title>
</head>
<body>
 <?php
 
  //array replace or array replace recursive

   $fruit = ['orange', 'banana', 'apple', 'grapes'];

$veggie = ['carrot', 'pea'];

$newArray = array_replace($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";
 
$array1 = array("a"=>array("red"),"b"=>array("green","pink"));

$array2 = array("a"=>array("yellow"),"b"=>array("black"));

$newArray = array_replace_recursive($array1, $array2);
 
echo "<pre>";
print_r($newArray);
echo "</pre>";
  

?>

</body>

</html>
