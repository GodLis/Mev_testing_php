<?php
/**
 * Index File Doc Comment
 *
 * This file is a part of a task11
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task11
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

require __DIR__ .'/vendor/autoload.php';

$file = 'config/config.ini';
$config = parse_ini_file($file);
echo $config['word'] ."\n";


if (!empty($config)) {
    echo "V1:" ."\n";
    $tmp = new GodLis\Task11\PalindromV1($config);
    echo $tmp->palindromV1() ."\n";

    echo "V2:" ."\n";
    $tmp = new GodLis\Task11\PalindromV2($config);
    echo $tmp->palindromV2() ."\n";
} else {
    exit(1);
}
