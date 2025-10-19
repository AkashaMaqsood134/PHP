<?php
   
   echo "<pre>";
   print_r($_GET);
    echo "</pre>";


   echo "<pre>";
   print_r($_SERVER);
    echo "</pre>";

     echo "<pre>";
    print_r($_POST);
    echo "</pre>";

     echo $_POST["fname"];
  //request can handle both get and post methods
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";

    echo $_REQUEST["fname"];
    echo $_REQUEST["age"];

?>