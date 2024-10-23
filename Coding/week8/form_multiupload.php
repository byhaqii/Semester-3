<!DOCTYPE html>
<html>
<head>
    <title>Multiupload Images</title>
</head>
<body>
    <h2>Upload Images</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="files[]" multiple="multiple" accept=".jpg, .jpeg, .png, .gif" />
        <input type="submit" value="Upload" />
    </form>
</body>
</html>


