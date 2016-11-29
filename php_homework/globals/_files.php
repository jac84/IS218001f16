<?php
//ensure in php.ini file, file_uploads = On
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOK = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//check if image file is an actual image or fake image
if(isset($_POST["submit"])){
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check){
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOK = 1;
  } else {
    echo "File is not an image.";
    $uploadOK = 0;
  }
}

?>
