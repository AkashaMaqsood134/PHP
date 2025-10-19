<!Doctype html>

<html>
   <head>
   <title>Array shift and unshift</title>
</head>
<body>
 <?php
 
  //array replace or array replace recursive

   $fruit = ['orange', 'banana', 'apple', 'grapes'];
  

   //remove first element
   array_shift($fruit);
   echo "<pre>";
print_r($fruit);
echo "</pre>";
  
  //add element at last
  array_unshift($fruit, "Watermelon");
    echo "<pre>";
print_r($fruit);
echo "</pre>";
?>

</body>

</html>
