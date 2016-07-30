<?php
/**
 * Watermark Class Doc Comment
 *
 * This file is a part of a task19
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task19
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task19;

/**
 * Class Watermark
 *
 * @category Testing
 * @package  GodLis\Task19
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class Watermark
{
    /**
     * Watermark variable
     *
     * @var
     */
    protected $sOrigImg;

    /**
     * Watermark variable
     *
     * @var
     */
    protected $sWmImg;

    /**
     * Watermark constructor.
     *
     * @param array $config Configs that are transfer to use
     */
    public function __construct($config)
    {
        $this->sOrigImg = $config['sOrigImg'];
        $this->sWmImg = $config['sWmImg'];
    }

    /**
     * Watermark destructor.
     */
    public function __destruct()
    {
        $this->sOrigImg = null;
        $this->sWmImg = null;
    }

    /**
     * Watermark function
     *
     * @return void
     */
    public function watermark()
    {
        if (! extension_loaded('gd')) {
            // Проверяем установку библиотеки GD
            echo 'GD не установлено';
            exit;
        }

        //        $sOrigImg = "/home/godlis/Mev/Mev_testing_php/task19/image.jpg";
        if ($this->sOrigImg === false) {
            die('Не удается открыть изображение');
        } else {
            echo 'Изображение успешно открыто';
            echo "\n";
        }

        //        $sWmImg = "/home/godlis/Mev/Mev_testing_php/task19/watermark.png";
        if ($this->sWmImg=== false) {
            die('Не удается открыть изображение');
        } else {
            echo 'Изображение успешно открыто';
            echo "\n";
        }

        $aImgInfo = getimagesize($this->sOrigImg);
        $aWmImgInfo = getimagesize($this->sWmImg);
        if (is_array($aImgInfo) && count($aImgInfo)) {
            $iSrcWidth = $aImgInfo[0];
            $iSrcHeight = $aImgInfo[1];

            $iFrameSize = 15;

            $rImage = imagecreatetruecolor(
                $iSrcWidth+$iFrameSize*2,
                $iSrcHeight+$iFrameSize*2
            );
            $rSrcImage = imagecreatefromjpeg($this->sOrigImg);

            imagecopy(
                $rImage,
                $rSrcImage,
                $iFrameSize,
                $iFrameSize,
                0,
                0,
                $iSrcWidth,
                $iSrcHeight
            );

            if (is_array($aWmImgInfo) && count($aWmImgInfo)) {
                $rWmImage = imagecreatefrompng($this->sWmImg);
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
