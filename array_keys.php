<!Doctype html>

<html>
   <head>
   <title>Array keys</title>
</head>
<body>
 <?php
 
  

   $fruit = ['orange', 'banana', 'apple', 'grapes'];
    $newArray=array_keys($fruit);

    $color1 =[
          "first" =>"red",
          "second" =>"green",
          "third" =>"blue",
          "fourth" =>"yellow"
        ];
	 $newArray=array_keys($color1);	

echo "<pre>";
print_r($newArray);
echo "</pre>";

    $newArray=array_key_first($color1);	
echo "<pre>";
print_r($newArray);
echo "</pre>";
    $newArray=array_key_last($color1);	
echo "<pre>";
print_r($newArray);
echo "</pre>";

    $newArray=array_key_exists("third", $color1);	

echo "<pre>";
print_r($newArray);
echo "</pre>";
   

?>

</body>

</html>
