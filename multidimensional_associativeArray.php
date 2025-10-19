<!DOCTYPE html>
<html>
    <head>
        <title>Multidimensional Associative array in php</title>
    </head>
<body>
  <?php
     $data = ["Krishana" => ["English" => 85, "maths"=>89, "chemistry" =>78],
                "Salman"=>["English"=> 68, "maths" =>79, "chemistry" =>58],
                 "Rahul"=> ["English " =>55, "maths"=>99, "chemistry" =>78]
];
    echo "<pre>";
    print_r($data);
    echo "</pre>";


    foreach($data as $key => $v1){
        echo $key ;
        foreach($v1 as $v2){
            echo $v2 . " ";
        }
        echo "</br>";
    }

   echo "<table border = '2px' cell-spacing = '0px' cell-padding = '2px'>";
      echo "<tr>
               <th>Student Name</th>
               <th>English</th>
               <th>Urdu</th>
               <th>Maths</th> </tr>";
   foreach($data as $key => $v1){
        echo "<tr><td>". $key. "</td>";
         foreach($v1 as $v2){
            echo "<td>". $v2." </td>";
         }
         echo "</tr>";
       }
       echo "</table>"; 
    ?>

    
</body>
</html>