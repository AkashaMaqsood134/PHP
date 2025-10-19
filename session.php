<?php

session_start();

$_SESSION["favcolor"] = "green";

echo $_SESSION["favcolor"]. "</br>";
echo "session variable set";

?>