<?php

namespace GodLis\Task14;

/**
 * Class ScanDir
 * @package GodLis
 */
class ScanDir
{
    /**
     * @param $dir
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
