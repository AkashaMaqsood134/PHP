<!DOCTYPE html>
<html>
    <head>
        <title>Multidimensional array in php</title>
    </head>
<body>
  <?php
    
     $mul_arr = [
          [1, "John", 28, "yes"],
          [2, "John" ,28, "yes"] ,
          [3, "John" ,28, "No"]

     ];
    echo "<pre>";
    print_r($mul_arr);
    echo "</pre>"; 
     

    echo $mul_arr[0][0];
    echo $mul_arr[0][1];
    echo $mul_arr[0][2];

    for($row = 0; $row<3 ; $row++){
        for ($col = 0 ; $col <4;$col++){
            echo $mul_arr[$row][$col];
        }
        echo "</br>";
    }

    echo "<table border = '2px' cell-padding = '2px' cell-spacing= '0'>";
     foreach($mul_arr as $v1){
        echo "<tr>";
        foreach($v1 as $v2){
            echo "<td> $v2 </td>";
        }
        echo "</tr>";
    }
        echo "</table>" ; 
    ?>

    
</body>
s
</html>