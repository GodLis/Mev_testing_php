<?php

namespace GodLis\Task19;

/**
 * Class Watermark
 * @package GodLis
 */
/**
 * Class Watermark
 * @package GodLis\Task19
 */
class Watermark
{
    /**
     * @param $sOrigImg
     * @param $sWmImg
     */
    public function watermark($sOrigImg, $sWmImg)
    {
        if (! extension_loaded('gd')) { // Проверяем установку библиотеки GD
            echo 'GD не установлено';
            exit;
        }

//        $sOrigImg = "/home/godlis/Mev/Mev_testing_php/task19/image.jpg";
        if ($sOrigImg === false) {
            die('Не удается открыть изображение');
        } else {
            echo 'Изображение успешно открыто';
            echo "\n";
        }

//        $sWmImg = "/home/godlis/Mev/Mev_testing_php/task19/watermark.png";
        if ($sWmImg=== false) {
            die('Не удается открыть изображение');
        } else {
            echo 'Изображение успешно открыто';
            echo "\n";
        }

        $aImgInfo = getimagesize($sOrigImg);
        $aWmImgInfo = getimagesize($sWmImg);
        if (is_array($aImgInfo) && count($aImgInfo)) {
            $iSrcWidth = $aImgInfo[0];
            $iSrcHeight = $aImgInfo[1];

            $iFrameSize = 15;

            $rImage = imagecreatetruecolor($iSrcWidth+$iFrameSize*2, $iSrcHeight+$iFrameSize*2);
            $rSrcImage = imagecreatefromjpeg($sOrigImg);

            imagecopy($rImage, $rSrcImage, $iFrameSize, $iFrameSize, 0, 0, $iSrcWidth, $iSrcHeight);

            if (is_array($aWmImgInfo) && count($aWmImgInfo)) {
                $rWmImage = imagecreatefrompng($sWmImg);
                imagecopy(
                    $rImage,
                    $rWmImage,
                    $iSrcWidth-$aWmImgInfo[0],
                    $iFrameSize,
                    0,
                    0,
                    $aWmImgInfo[0],
                    $aWmImgInfo[1]
                );
            }

            imagepng($rImage, "imageWithWatermark.png");
        } else {
            echo 'Ошибка изображения!';
            exit;
        }
    }
}
