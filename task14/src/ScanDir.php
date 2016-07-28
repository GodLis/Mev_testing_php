<?php
/**
 * ScanDir File Doc Comment
 *
 * This file is a part of a task14
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task14
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task14;

/**
 * Class ScanDir
 *
 * @category Testing
 * @package  GodLis\Task14
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class ScanDir
{
    /**
     * ScanDir function
     *
     * @param string $dir Configs that are transferred to use
     *
     * @return array
     */
    public function scanDir($dir)
    {
        $arrfiles = [];
        if (is_dir($dir)) {
            $arrfiles[] = $dir."/";
            if ($handle = opendir($dir)) {
                chdir($dir);
                while (false !== ($file = readdir($handle))) {
                    if ($file != "." && $file != "..") {
                        if (is_dir($file)) {
                            $arr = $this->scanDir($file);
                            foreach ($arr as $value) {
                                $arrfiles[] = "    ".$value;
                            }
                        } else {
                            $arrfiles[] = "    ".$file;
                        }
                    }
                }
                chdir("../");
            }
            closedir($handle);
        }
        return $arrfiles;
    }
}
