<!Doctype html>

<html>
   <head>
   <title>Array walk and walk recursive</title>
</head>
<body>
 <?php
 
//chahty hyn k aik function array ki hr key k liye chly to array walk
$fruits = array(
            "a" => "Lemon",
            "b" => "Orange",
            "c" => "Banana",
            "d" => "Apple"
          );

array_walk($fruits, "myFunction");

function myFunction($value, $key){
  echo "$key : $value <br><br>";
}

//Third parameter as a value

array_walk($fruits, "myFunction1", "is a key of");

function myFunction1($value, $key , $param){
  echo "$key $param $value. <br>";
}
echo '<br><br>';



$veggie = array( "1" => "Carrot", "2" => "Tomatoes");

$fruits1 = array(
            $veggie,
            "a" => "Lemon",
            "b" => "Orange",
            "c" => "Banana",
            "d" => "Apple"
          );

array_walk_recursive($fruits1, "myFunction1", "is a key of");



 

?>

</body>

</html>
