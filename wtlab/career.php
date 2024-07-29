<html>
    <body>
       
            <?php echo "your name is ". $_POST['username'] ."<br>";?>
            <?php echo "your phone number is ". $_POST['number']."<br>"; ?>
            <?php echo "your gender is ". $_POST['gender'] ."<br>";?>
            <?php echo " your email is ".$_POST['email']."<br>" ;?>
            <?php echo "your qualification" .$_POST['qualification']; ?>
            <?php

if (isset($_FILES['image']) && ($_FILES['image']['error'] == 0)) {
   
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
      move_uploaded_file($file_tmp, "pooji/" . $filename);
      echo "Success";
   }
}
//}
?>
Sent file: <?php echo $_FILES['image']['name']; ?>
<br>
<a download="<?php echo $filename; ?>" href="pooji/<?php echo $filename; ?>">Click</a>
<a href="careerguidance.html">carrer guidance</a>
    </body>
</html>