<?php

//http://php.net/manual/en/book.image.php


$x = 480;
$y = 320;

$image = imagecreate($x,$y);
$background = imagecolorallocate($image,0,70,89);
$white = imagecolorallocate($image,255,255,255);
$test1 = imagettftext($image,42,0,20,40,$white,"fonts/TCCEB.TTF","Some text");
//imagestring($image, 1, 5, 5,  'A Simple Text String', $white);

header('Content-Type: image/jpeg');
imagejpeg($image); //image, output, compression percentage.
//save to file
// imagejpeg($image,"project1.jpg");


?>

<!-- display image
<img src="project1.jpg" alt="">

-->

