<!Doctype html>

<html>
   <head>
   <title>Array slice</title>
</head>
<body>
 <?php
 
  //array slice o
     //       -4         -3       -2         -1
   $fruit = ['orange', 'banana', 'apple', 'grapes'];
   
   //1=>array, 2=>which index, 3=>how many values
   $newArray = array_slice($fruit, -2, 2, true ); //- reverse the array and true return actual index
echo "<pre>";
print_r($newArray);
echo "</pre>";

$a=array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"brown");
print_r(array_slice($a,1,2,true));
  

?>

</body>

</html>
