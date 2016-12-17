<?php
/*define("UPLOAD_DIR", "");

if (!empty($_FILES["file"])) {
    $fileIn = $_FILES["file"];

    if ($fileIn["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An error occurred.</p>";
        exit;
    } else {
      echo "File successfully uploaded!";
    }

    // ensure a safe filename
    $name = preg_replace("/[^A-Z0-9._-]/i", "_", $fileIn["name"]);
    echo "file name is ". $name

    // don't overwrite an existing file
    $i = 0;
    $parts = pathinfo($name);
    while (file_exists(UPLOAD_DIR . $name)) {
        $i++;
        $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
    }

    // preserve file from temporary directory
    $success = move_uploaded_file($fileIn["tmp_name"],
        UPLOAD_DIR . $name);
    if (!$success) {
        echo "<p>Unable to save file.</p>";
        exit;
    }

    // set proper permissions on the new file
    chmod(UPLOAD_DIR . $name, 0644);
}*/

$target_dir = "uploads/"; //afs/cad.njit.edu/u/j/a/jac84/public_html/is218001f16/php_homework/homework11";
$target_file = $target_dir . basename($_FILES["file"]['name']);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"])) {
    print_r('File '. $_FILES["file"]['name']. " is uploaded to ". $_FILES["file"]['tmp_name']);
    /*$check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }*/
}
?>
