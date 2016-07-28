<?php
/**
 * Index File Doc Comment
 *
 * This file is a part of a task13
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task13
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

require __DIR__ .'/vendor/autoload.php';

$file = 'config/config.ini';
$config = parse_ini_file($file);


if (!empty($config)) {
    if (!empty($config['year'])) {
        $tmp = new \GodLis\Task13\ProgrammerDay($config);
        echo $tmp->programerDay() ."\n";
    }
} else {
    exit(1);
}

