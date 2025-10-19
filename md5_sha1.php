<?php
$str = "Hello";

$newstr = md5($str, true);
echo $newstr ."</br>";

$newstr1 = md5($str, false);
echo $newstr1. "</br>";

$newstr3 = sha1($str, true);
echo $newstr3. "</br>";

$newstr4 = sha1($str, false);
echo $newstr4. "</br>";
?>