<?php
if (isset($_FILES['files']['name'])) {
    $errors = array();
    $files_count = count($_FILES['files']['name']);

    for ($i = 0; $i < $files_count; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];
        $file_ext = strtolower(end(explode('.', $_FILES['files']['name'][$i])));

        // ... rest of the validation code ...

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
        } else {
            echo "File " . $file_name . " failed to upload: " . implode("", $errors);
        }
    }
}
?>

