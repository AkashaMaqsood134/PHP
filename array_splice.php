<!Doctype html>

<html>
   <head>
   <title>Array splice</title>
</head>
<body>
 <?php
 
  //array slice o
     //       -4         -3       -2         -1
   $fruit = ['orange', 'banana', 'apple', 'grapes'];
   
   //1=>array, 2=>which index, 3=>how many values, 4=>second array
  array_splice($fruit, -2, 2); //to delete values
  //no need of new array.
echo "<pre>";
print_r($fruit);
echo "</pre>";


  //to add second array values
  $color = ["yellow", "orange"];

  array_splice($fruit, 2, 2, $color);
  
  echo "<pre>";
print_r($fruit);
echo "</pre>";

   array_splice($fruit, count($fruit), 2, $color); //to add at last

  echo "<pre>";
print_r($fruit);
echo "</pre>";



$a=array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"brown");
print_r(array_splice($a,1,2,$color));
  

?>

</body>

</html>
