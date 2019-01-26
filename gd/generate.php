<?php

header('content-type: image/jpeg'); //For program to run there should be no text or html in this program(Nor in starting not in the end or between of php tags as program is image type as mentioned in header).

$conn = mysqli_connect('localhost','root','','a_database');

  if (isset($_GET['id'])){

    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "SELECT email FROM users WHERE id=$id";
    $result = mysqli_query($conn, $query);
   
    if (mysqli_num_rows($result)>=1){
      while($row = mysqli_fetch_assoc($result)){
         $email = $row['email'];
      }
    }

    else $email = 'Id not found';
}  else $email = 'No Id specified';
  

$email_length = strlen($email);
$font_size = 4;

$image_height = ImageFontHeight($font_size);
$image_width = ImageFontWidth($font_size)*$email_length;  //This can be any constant value if we want to get image of specific size.But this is automatically updated and let us not waste any memory.

$image = imagecreate($image_width, $image_height);

imagecolorallocate($image, 255, 255, 255);  //RGB values(0-255) are minimum(0, 0, 0) means black and maximum(255, 255, 255) means white.
$font_colour = imagecolorallocate($image, 2, 12, 100);

imagestring($image, $font_size, 0, 0, $email, $font_colour);
imagejpeg($image);
?>