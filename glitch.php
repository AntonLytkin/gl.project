<?php
header('Content-type:image/jpeg');

include 'inc/lib.inc.php';

$img = $_GET['photo'];
$jpg = curlGetJpeg($img);
$hex = bin2hex($jpg);
$bytearr = hexToByteArray($hex);
$hex = corruptJpegBytes($bytearr);
$bin = pack('H*',$hex);
$im = imagecreatefromstring($bin);
imagejpeg($im);
imagedestroy($im);