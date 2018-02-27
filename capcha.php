<?php
session_start();
define("CAPCHAW", 150);
define("CAPCHAH", 25);
define("CAPCHA_NUM", 7);
$phrase="";
for($i=0; $i<CAPCHA_NUM; $i++){
    $phrase=$phrase.chr(rand(97, 122));
}
$_SESSION['phrase']=sha1($phrase);
$img=imagecreatetruecolor(CAPCHAW, CAPCHAH);
$backGroundColor=imagecolorallocate($img, 255, 255, 255);
$textColor=imagecolorallocate($img, 0, 0, 0);
$graphicColor=imagecolorallocate($img, 64, 64, 64);
imagefilledrectangle($img, 0, 0, CAPCHAW, CAPCHAH, $backGroundColor);
for($i=0; $i<5; $i++){
    imageline($img, 0, rand()%CAPCHAH, CAPCHAW, rand()%CAPCHAH, $graphicColor);
}
for($i=0; $i<50; $i++){
    imagesetpixel($img, rand()%CAPCHAW, rand()%CAPCHAH, $graphicColor);
}
imagettftext($img, 16, 0, 5, CAPCHAH-5, $textColor, "a_AssuanTitulStrDs.ttf", $phrase);
header("content-type: image/png");
imagepng($img);
imagedestroy($img);
