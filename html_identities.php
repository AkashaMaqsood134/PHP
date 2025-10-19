<!DOCTYPE html>
<html>
    <head>
        <title>Html identities and htmlspecialcharacters in php</title>
    </head>
<body>
  <?php
      $str = "A 'qoute' is <b>bold</b>";

      echo $str."</br>";
      echo htmlentities($str, ENT_QUOTES);
     $newstr = htmlentities($str, ENT_NOQUOTES); 

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = htmlspecialchars($str, ENT_NOQUOTES);  

echo "<pre>";
print_r($newstr);
echo "</pre>";


?>
  
    
</body>

</html>