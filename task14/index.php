<?php
/**
 * Index File Doc Comment
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

require __DIR__ .'/vendor/autoload.php';

$file = 'config/config.ini';
$config = parse_ini_file($file);

if (!empty($config)) {
    $tmp = new GodLis\Task14\ScanDir();
    $res = $tmp-> scanDir($config['dir']);
    for ($i = 0; $i<count($res); $i++) {
        echo $res[$i] ."\n";
    }
} else {
    exit(1);
}

