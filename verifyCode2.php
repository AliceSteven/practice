<?php
$width = 160;
$height = 40;
$image = imagecreatetruecolor($width, $height);
$white = imagecolorallocate($image, 255, 255, 255);
imagefilledrectangle($image, 0, 0, $width, $height, $white);
function getRandColor($image){
	return	imagecolorallocate($image, mt_rand(0,255), mt_rand(0,255), mt_rand(0,255));
};
//快速创建字符串
$string = join('', array_merge(range(0, 9), range('a', 'z'), range('A', 'Z')));
// echo $string;
$textWidth = imagefontwidth(28);
$textHeight = imagefontheight(28);

$length = 4;
for ($i=0; $i < $length; $i++) {
	$randColor = getRandColor($image);
	$size = mt_rand(24,28);
	$angle = mt_rand(-15,15);
	$x = ($width/$length)*$i+$textWidth;
	$y = mt_rand($height/2, $height-$imagefontheight);
	$fontFile = 'fonts/vijaya.ttf';
	$text = str_shuffle($string)[0];
	imagettftext($image, $size, $angle, $x, $y, $randColor, $fontFile, $text);
}

//添加干扰元素
for ($i=1; $i <= 50; $i++) { 
	imagesetpixel($image, mt_rand(0, $width), mt_rand(0, $height), getRandColor($image));
}

//绘制线条干扰元素
for ($i=1; $i <= 3; $i++) { 
	imageline($image, mt_rand(0, $width), mt_rand(0, $height), mt_rand(0, $width), mt_rand(0, $height), getRandColor($image));
}

header('content-type:image/png');
imagepng($image);
imagedestroy($image);

