<?php
//创建画布
$width = 180;
$height = 50;
$image = imagecreatetruecolor($width, $height);
//创建颜色
$white = imagecolorallocate($image, 255, 255, 255);
imagefilledrectangle($image, 0, 0, $width, $height, $white);
//创建画笔颜色
$randColor = imagecolorallocate($image, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
//开始绘制
$size = mt_rand(24,28);
$angle = mt_rand(-15, 15);
$x = 60;
$y = 30;
$fontFile = 'fonts/vijaya.ttf';
$text = mt_rand(1000, 9999);
imagettftext($image, $size, $angle, $x, $y, $randColor, $fontFile, $text);

header('content-type:image/png');
//输出图像
imagepng($image);
imagepng($image, 'images/code.png'); 
//销毁资源
imagedestroy($image);


