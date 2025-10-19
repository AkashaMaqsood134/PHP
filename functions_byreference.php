<!DOCTYPE html>
<html>
    <head>
        <title>comments in php</title>
    </head>
<body>
  <?php
     
    function referenceTest(&$val1, &$val2){
        
        $val1 = 5;
        $value = $val1 + $val2;
        return $value;
    }
      $a = 2;
      $b = 3;
    $total =  referenceTest($a, $b);
    echo $total;

?>
  
    
</body>

</html>