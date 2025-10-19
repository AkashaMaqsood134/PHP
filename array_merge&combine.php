<!Doctype html>

<html>
   <head>
   <title>Array merge and combine</title>
</head>
<body>
 <?php
 
  //array replace or array replace recursive

   $fruit = ['orange', 'banana', 'apple', 'grapes'];

   $veg = ["Potatoes"];
   $newarray = array_merge($fruit, $veg);


   echo "<pre>";
print_r($newarray);
echo "</pre>";
   
  //if we want the second first value but merge two arrays

    $newarray = $fruit + $veg;
echo "<pre>";
print_r($newarray);
echo "</pre>";

$veggie = ['b' => ['color' => ['red','blue','green']],  /* ---- more complex multidim array ----*/
            'e' => 'pea',
            55,
            68
          ];

$newArray = array_merge_recursive($fruit,$veggie);
       echo "<pre>";
print_r($newArray);
echo "</pre>";

$name = array("Ram","Mohan","Salman");
$age = array("35","37","43");

$newArray = array_combine($name, $age);

echo "<pre>";
print_r($newArray);
echo "</pre>";



?>

</body>

</html>
