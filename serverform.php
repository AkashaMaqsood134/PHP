<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Page</title>
</head>
<body>
    <form action= <?php echo $_SERVER['PHP_SELF'] ?> method="POST">
        Name: <input type="text" name="fname"><br><br>
        
        Age: <input type="text" name="age"><br><br>

        <input type="submit" name="save"><br><br>
    </form>
     <?php
       if(isset($_POST['save'])){
        $name = $_POST['fname'];
        $age = $_POST['age'];

        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
       }

    ?>

</body>
</html>