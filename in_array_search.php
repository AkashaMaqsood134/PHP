<!Doctype html>

<html>
   <head>
   <title>In array search</title>
</head>
<body>
 <?php
 
 $marks = [10,20,30, '40'];
  $data = array(20,30,40);

  $array = [["Fruit"=> "banana"],
            ["fav_fruit" => "Orange"] 



        ];

  $a = array(array('a', 'b'), array('c', 'd'));

if(in_array(array('a', 'b'), $a,true)){
    echo "yes";
}
else{
    echo "No";
}

//return index in simple array and key in associative array
echo array_search('40', $marks);



if(in_array(40, $marks,true)){
    echo "yes";
}
else{
    echo "No";
}

;
  

?>

</body>

</html>
