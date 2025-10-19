<?php
 if(isset($_FILES["fileToUpload"])){

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    $filename = $_FILES["fileToUpload"]["name"];
    $filesize = $_FILES["fileToUpload"]["size"];
    $tempname = $_FILES["fileToUpload"]["tmp_name"];
    $filetype = $_FILES["fileToUpload"]["type"];

    move_uploaded_file($tempname, "upload-images/".$filename);
 }

?>



<html>
<body>

    <form action="fileupload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">


</body>

</html>