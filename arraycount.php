<!Doctype html>

<html>
   <head>
   <title>Array Count and Array Size of</title>
</head>
<body>
 <?php
 
 $marks = [10,20,30];
  $data = array(20,30,40);

  $array = [["Fruit"=> "banana"],
            ["fav_fruit" => "Orange"] 
];


echo count($marks);
//echo count($array['Fruit'], 1);

print_r(array_count_values($data));

?>

</body>

</html>
