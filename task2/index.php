<?php
/**
 * Index File Doc Comment
 *
 * This file is a part of a task2
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task2
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

require __DIR__ .'/vendor/autoload.php';

$file = 'config/config.ini';
$config = parse_ini_file($file);
print_r($config['arr']);

$result = new \GodLis\Task2\FindMinAndMaxElements($config);
echo "Method1: \n";
echo "Max Element = " . $result->seachMaxElement() ."\n";
echo "Min Element = " . $result->seachMinElement() ."\n";

$result2 = new \GodLis\Task2\FindMinAndMaxElementsV2($config);
echo " Method2: \n";
echo "Max Element = " . $result2->seachMaxElement() ."\n";
echo "Min Element = " . $result2->seachMinElement() ."\n";
