<!DOCTYPE html>
<html>
    <head>
        <title>Str length and count in php</title>
    </head>
<body>
  <?php
  $str = "Akasha Maqsood Akasha";

   $newstr = strlen($str);
   echo $newstr . "</br>";

   $newstr1 = str_word_count($str);
   echo $newstr1 . "</br>";

   $newstr2 = substr_count($str, "Akasha", 0 , 21);
   echo $newstr2 . "</br>";
    ?>


    
</body>
</html>