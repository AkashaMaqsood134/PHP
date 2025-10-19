<!Doctype html>

<html>
   <head>
   <title>Array pop and push</title>
</head>
<body>
 <?php
 
  //array replace or array replace recursive

   $fruit = ['orange', 'banana', 'apple', 'grapes'];

   array_pop($fruit);
   echo "<pre>";
print_r($fruit);
echo "</pre>";
  
  array_push($fruit, "Watermelon");
    echo "<pre>";
print_r($fruit);
echo "</pre>";
?>

</body>

</html>
