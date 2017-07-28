<?php
//创建画布
$width = 500;
$height= 500;
$image = imagecreatetruecolor($width, $height);
//创建颜色
$white = imagecolorallocate($image, 255, 255, 255);
$randColor = imagecolorallocate($image, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
imagefilledrectangle($image, 0, 0, 500, 500, $white); //绘制填充矩形
//绘画
imagettftext($image, 32, 0, 150, 245, $randColor, 'fonts/vijaya.ttf', 'King of North');
imagettftext($image, 24, 30, 150, 150, $randColor, 'fonts/vijaya.ttf', 'Winter is coming');
//以图像形式显示
header('content-type:image/png');
//输出图像
imagepng($image);
imagepng($image, 'images/text.png'); //保存文件
//销毁资源
imagedestroy($image);

