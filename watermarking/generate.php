<?php

    header('Content-type: image/jpeg');
    if(isset($_GET['source'])){
        $source = $_GET['source'];

        $watermark = imagecreatefrompng('logo.png');
        $watermark_width = imagesx($watermark);  //imagesx(); function is used to get width  of the image.
        $watermark_height = imagesx($watermark); //imagesy(); function is used to get height  of the image.

        $image = imagecreatetruecolor($watermark_width, $watermark_height);
        $image = imagecreatefromjpeg($source);

        $image_size = getimagesize($source);
        $x = $image_size[0] - $watermark_width - 10;
        $y = $image_size[1] - $watermark_height - 10;

        imagecopymerge($image, $watermark, $x, $y, 0, 0, $watermark_width, $watermark_height, 80); //merge(watermark) image of parameter 2nd on image in parameter 1st, 3rd and 4th parameters gives the position of the watermark, 5th and 6th parameters are the x and y corners of the source plane, 7th and 8th parameters are the watermark width and height and 9th parameter is the opacity of the water mark.
        imagejpeg($image, $source.'.watermark.jpg');  //2nd parameter here rename the file as a new image.
    }

?>