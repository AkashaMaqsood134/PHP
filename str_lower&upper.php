<!DOCTYPE html>
<html>
    <head>
        <title>Str lower and upper in php</title>
    </head>
<body>
  <?php
  $str = "Akasha Maqsood";

   $newstr = strtolower($str);
   echo $newstr . "</br>";

   $newstr1 = strtoupper($str);
   echo $newstr1 . "</br>";

   $newstr2 = ucfirst($str);
   echo $newstr2 . "</br>";

  $newstr3 = ucwords($str);
   echo $newstr3 . "</br>";

   $newstr4 = lcfirst($str);
   echo $newstr4. "</br>";
    ?>


    
</body>
</html>