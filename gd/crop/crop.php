<?php
//v1
//$logo = 'orig.png';
//$im = imagecreatefrompng($logo);
//$temp = tempnam(sys_get_temp_dir(), 'gd');
//$im = imagecropauto($im, IMG_CROP_WHITE);
//imagepng($im, $temp);
//imagedestroy($im);
//system("display $temp\n");

//v2
//$ini_filename = 'orig.png';
//$im = imagecreatefrompng($ini_filename );
//$to_crop_array = array('x' =>310 , 'y' => 0, 'width' => 573, 'height'=> 500);
//$thumb_im = imagecropauto($im ,IMG_CROP_WHITE , .5 ,-1 );
// $thumb_im = imagecrop($im, $to_crop_array);
//imagepng($thumb_im, 'imgOut.png', 9);


//v3

if ( ! extension_loaded('gd') || !function_exists('imagecrop')) die( 'skip GD imagecropauto not present; skipping test' ); 
?> 


<?php

echo "IMG_CROP_WHITE\n";
$im = imagecreatefrompng("orig.png");
$im_crop = imagecropauto($im,IMG_CROP_WHITE);
imagepng($im_crop, "crop_orig.png");
var_dump(imagesx($im_crop));
var_dump(imagesy($im_crop));
@unlink("crop_orig.png");


/*
$image_src = imagecreatefrompng("orig.png");

$croppedImage = imagecropauto($image_src,IMG_CROP_WHITE);

//header( 'Content-Type: image/png');

imagepng($croppedImage);*/
?> 

