<?php
//1.创建画布
$width = 500;
$height = 300;
$img = imagecreatetruecolor($width, $height);
//2.创建颜色
$color = imagecolorallocate($img, 255, 255, 255);
$red = imagecolorallocate($img, 255, 0, 0);
//3.开始绘画
imagechar($img, 5, 50, 100, 'K', $color); //水平绘制一个字符
imagecharup($img, 5, 100, 110, 'N', $red); //垂直绘制一个字符
imagestring($img, 5, 150, 100, 'King of North', $color);
//4.告诉浏览器以图片的形式显示
header('content-type:image/jpeg');
//5.输出图像
imagejpeg($img);
//6.销毁资源
imagedestroy($img);





