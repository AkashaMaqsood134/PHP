<!DOCTYPE html>
<html>
    <head>
        <title>return functions in php</title>
    </head>
<body>
  <?php
     
    function returnTest($val1, $val2){

        $value = $val1 + $val2;
        return $value;
    }
      
    $total =  returnTest(2,3);
    echo $total;

?>
  
    
</body>

</html>