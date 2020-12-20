<?php
if (isset($_FILES['images'])) {
 $file_name = $_FILES['images']['name'];
 $file_size = $_FILES['images']['size'];
 $file_temp = $_FILES['images']['tmp_name'];
 $file_type = $_FILES['images']['type'];
 move_uploaded_file($file_temp,"images/".$file_name);
}
else {
   echo "file not uploded";
}

?>

<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="images" id="uplode">
<input type="submit">
</form>

