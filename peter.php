<?PHP


$stamp1 = imagecreatefrompng('Webysther_20160423_-_Elephpant.svg.png');
$stamp2 = imagecreatefrompng('blog-html-5.png');
$stamp3 = imagecreatefrompng('php-mysql-development.png');
$stamp4 = imagecreatefrompng('learn-javascript.png');



$im = imagecreatefromjpeg('code_banner.jpg');




// Set the margins for the stamp and get the height/width of the stamp image
$marge_right = 1050;
$marge_bottom = 90;
$sx1 = imagesx($stamp1);
$sy1 = imagesy($stamp1);


$marge_right2 = 1040;
$marge_bottom2 = 250;
$sx2 = imagesx($stamp2);
$sy2 = imagesy($stamp2);

$marge_right3 = 540;
$marge_bottom3 = 250;
$sx3 = imagesx($stamp2);
$sy3 = imagesy($stamp2);

$marge_right4 = 720;
$marge_bottom4 = 120;
$sx4 = imagesx($stamp4);
$sy4 = imagesy($stamp4);

// Copy the stamp image onto our photo using the margin offsets and the photo 
// width to calculate positioning of the stamp. 
imagecopy($im, $stamp1, imagesx($im) - $sx1 - $marge_right, imagesy($im) - $sy1 - $marge_bottom, 0, 0, imagesx($stamp1), imagesy($stamp1));

imagecopy($im, $stamp2, imagesx($im) - $sx2 - $marge_right2, imagesy($im) - $sy2 - $marge_bottom2, 0, 0, imagesx($stamp2), imagesy($stamp2));


imagecopy($im, $stamp3, imagesx($im) - $sx3 - $marge_right3, imagesy($im) - $sy3 - $marge_bottom3, 0, 0, imagesx($stamp3), imagesy($stamp3));


imagecopy($im, $stamp4, imagesx($im) - $sx4 - $marge_right4, imagesy($im) - $sy4 - $marge_bottom4, 0, 0, imagesx($stamp4), imagesy($stamp4));

// Output and free memory
header('Content-type: image/png');
imagepng($im);
//imagepng($im, "save/pngsavetoday2.png");
imagedestroy($im);
?>
