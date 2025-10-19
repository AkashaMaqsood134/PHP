<!DOCTYPE html>
<html>
    <head>
        <title>Multidimensional array with list in php</title>
    </head>
<body>
  <?php
     $mul_arr = [
          [1, "John", 28, "yes"],
          [2, "John" ,28, "yes"] ,
          [3, "John" ,28, "No"]

     ];
    
     echo "<table border = '2px' cell-padding = '5px' cell-spacing='0px'>";
     foreach($mul_arr as list($a, $b, $c, $d)){
        echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td></tr>";
     }
     echo "</table>";

   
     $data = [["name" => "Krishana","English" => 85, "maths"=>89, "chemistry" =>78],
               ["name" => "Salman", "English"=> 68, "maths" =>79, "chemistry" =>58],
                ["name" => "Rahul", "English"=> 55, "maths"=>99, "chemistry" =>78]
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
               <th>Maths</th>
               <th>Chemistry</th> </tr>";
   foreach($data as list("name" => $a, "English" => $b,"maths" => $c, "chemistry" => $d)){
        echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><tr>";
    }

       echo "</table>"; 
    ?>

    
</body>
</html>