<?php
//if($_SERVER["REQUEST_METHOD"] == "POST")
//{
if (isset($_FILES['image']) && ($_FILES['image']['error'] == 0)) {
   //$errors= array();
   $filename = $_FILES['image']['name'];
   $file_size = $_FILES['image']['size'];
   $file_tmp = $_FILES['image']['tmp_name'];
   $file_type = $_FILES['image']['type'];
   $file_ext = pathinfo($filename, PATHINFO_EXTENSION);
   $extensions = array("jpeg", "jpg", "png");
   if (in_array($file_ext, $extensions) === false) 
   {
      echo "extension not allowed, please choose a JPEG or PNG file.";
   } 
   elseif ($file_size > 2097152) 
   {
      echo 'File size must be excately 2 MB';
   } 
   else 
   {
      move_uploaded_file($file_tmp, "poojidir/" . $filename);
      echo "Success";
   }
}
//}
?>
Sent file: <?php echo $_FILES['image']['name']; ?>
<br>
<a download="<?php echo $filename; ?>" href="poojidir/<?php echo $filename; ?>">Click</a>