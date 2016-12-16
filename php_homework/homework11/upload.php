<?php
define("UPLOAD_DIR", "/afs/cad.njit.edu/u/j/a/jac84/public_html/UPLOADS");

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
    echo "file name is ". $name;

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
}

?>
