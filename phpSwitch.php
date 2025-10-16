<!Doctype html>
<html>
  <head>
    <title>Switch in php</title>
</head>
    <body>
<?php
    $weekday = "Sunday";

    switch($weekday){

    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "wednesday":
        echo "Today is Wednesday";
        break;
    case "Sunday":
        echo "Today is sunday";
        break;
    default:
       break;

    }
    $age = 18;
    switch(true):
        case ($age>=18 && $age <=20):
            echo "</br>You are eligible";
            break;
        case ($age>=9 && $age <=17):
            echo "You are not eligible";
            break;
        endswitch;
?>

</body>

</html>