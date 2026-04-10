<?php
$conn=new mysqli("localhost","root","","ymclass");
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <input type="text" name="image_name" placeholder="Image Name" required>
    <input type="submit" value="Upload Image">
</form>
