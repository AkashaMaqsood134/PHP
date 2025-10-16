<!Doctype html>
<html>
  <head>
    <title> continue/break in php</title>
</head>
    <body>
<?php
for ($a = 1; $a < 10; $a++) {
 if ($a == 3){
    //echo "No. : " . $a . "<br>";
    continue;
  }

  echo "Number : " . $a . "<br>";
}

for ($a = 1; $a < 10; $a++) {
 if ($a == 3){
    echo "No. : " . $a . "<br>";
    break;
  }

  echo "Number : " . $a . "<br>";
}
    ?>
</body>

</html>
  
  
  
  
  for($i = 0; $i<10 ; $i++){
    if($a==3)
    continue;