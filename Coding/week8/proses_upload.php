<?php
$targetDirectory = "images/";

// Create the directory if it doesn't exist
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

if ($_FILES['files']['name'][0]) {
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . basename($fileName);

        // Validate the file type to ensure it's an image
        if (in_array($fileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "Image $fileName uploaded successfully.<br>";
            } else {
                echo "Failed to upload image $fileName.<br>";
            }
        } else {
            echo "Invalid file type: $fileName.<br>";
        }
    }
} else {
    echo "No files were uploaded.";
}
?>
