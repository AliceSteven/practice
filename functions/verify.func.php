<?php
//创建画布
$width = 200;
$height = 40;
$image = imagecreatetruecolor($width, $height);
//创建颜色
$white = imagecolorallocate($image, 255, 0, 0);
//创建填充矩形
imagefilledrectangle($image, 0, 0, $width, $height, $white);
function getRandColor($image) {
	return imagecolorallocate($image, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
}

/**
 *
 *
 * 
 */


