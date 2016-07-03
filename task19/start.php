<?php

//require "vendor/autoload.php";

//if (! extension_loaded('gd')) { // Проверяем установку библиотеки GD
//    echo 'GD не установлено. Обратитесь к администратору вашего сайта!';
//    exit;
//}
//
//$sOrigImg = "/home/godlis/Mev/Mev_testing_php/task19/image.jpg";
//$sWmImg = "/home/godlis/Mev/Mev_testing_php/task19/watermark.png";
//
//$aImgInfo = getimagesize($sOrigImg);
//$aWmImgInfo = getimagesize($sWmImg);
//if (is_array($aImgInfo) && count($aImgInfo)) {
//    header ("Content-type: image/png");
//
//    $iSrcWidth = $aImgInfo[0];
//    $iSrcHeight = $aImgInfo[1];
//
//    $iFrameSize = 15;
//
//    $rImage = imagecreatetruecolor($iSrcWidth+$iFrameSize*2, $iSrcHeight+$iFrameSize*2); // Создаем новое изображение
//    $rSrcImage = imagecreatefromjpeg($sOrigImg); //  Создаем исходное изображение
//
//    $aGrid[1] = imagecolorallocate($rImage, 130, 130, 130); // Определяем цвета для прямоугольной области
//    $aGrid[2] = imagecolorallocate($rImage, 150, 150, 150);
//    $aGrid[3] = imagecolorallocate($rImage, 170, 170, 170);
//    $aGrid[4] = imagecolorallocate($rImage, 190, 190, 190);
//    $aGrid[5] = imagecolorallocate($rImage, 210, 210, 210);
//    for ($i=1; $i<=5; $i++) { // Наша маленькая рамка будет содержать 5 прямоугольников для эмуляции градиента
//        imagefilledrectangle($rImage, $i*3, $i*3, ($iSrcWidth+$iFrameSize*2)-$i*3, ($iSrcHeight+$iFrameSize*2)-$i*3, $aGrid[$i]); // Рисуем заполненный прямоугольник
//    }
//
//    imagecopy($rImage, $rSrcImage, $iFrameSize, $iFrameSize, 0, 0, $iSrcWidth, $iSrcHeight); // Копируем полученное изображение на изображение-источник
//
//    if (is_array($aWmImgInfo) && count($aWmImgInfo)) {
//        $rWmImage = imagecreatefrompng($sWmImg); //  Создаем изображение водяного знака
//        imagecopy($rImage, $rWmImage, $iSrcWidth-$aWmImgInfo[0], $iFrameSize, 0, 0, $aWmImgInfo[0], $aWmImgInfo[1]); // Копируем изображение водяного знака на изображение источник
//    }
//
////    $iTextColor = imagecolorallocate($rImage, 255, 255, 255); // Определяем цвет текста
////    $sIP = $_SERVER['REMOTE_ADDR']; // Определяем IP посетителя
////    imagestring($rImage, 5, $iFrameSize*2, $iFrameSize*2, " Адрес: Your IP adress: {$sIP}, {$sOrigImg} - ({$iSrcWidth} x {$iSrcHeight})", $iTextColor); // Рисуем текст
//
//    imagepng($rImage); // Выводим изображение
//} else {
//    echo 'Image error!';
//    exit;
//}
//

function watermark_image($oldimage_name, $new_image_name){
// получаем имя изображения, используемого в качестве водяного знака
global $image_path;
// получаем размеры исходного изображения
list($owidth,$oheight) = getimagesize($oldimage_name);
// задаем размеры для выходного изображения
$width = 600;
$height = 300;
// создаем выходное изображение размерами, указанными выше
$im = imagecreatetruecolor($width, $height);
$img_src = imagecreatefromjpeg($oldimage_name);
// наложение на выходное изображение, исходного
imagecopyresampled($im, $img_src, 0, 0, 0, 0, $width, $height, $owidth, $oheight);
$watermark = imagecreatefrompng($image_path);
// получаем размеры водяного знака
list($w_width, $w_height) = getimagesize($image_path);
// определяем позицию расположения водяного знака
$pos_x = $width - $w_width;
$pos_y = $height - $w_height;
// накладываем водяной знак
imagecopy($im, $watermark, $pos_x, $pos_y, 0, 0, $w_width, $w_height);
// сохраняем выходное изображение, уже с водяным знаком в формате jpg и качеством 100
imagejpeg($im, $new_image_name, 100);
// уничтожаем изображения
imagedestroy($im);
unlink($oldimage_name);
return true;
}

watermark_image('\home\godlis\Mev\Mev_testing_php\task19\image.jpg', '\home\godlis\Mev\Mev_testing_php\task19\watermark.png');
