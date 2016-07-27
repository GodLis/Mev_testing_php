<?php
/**
 * Index File Doc Comment
 *
 * This file is a part of a task1
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task1
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

require __DIR__ .'/vendor/autoload.php';

$file = 'config/config.ini';
$config = parse_ini_file($file);
print_r($config['arr']);

echo "Result 1: ";
$result = new GodLis\Task1\ArrayAdder($config);
echo $result->arrayAdder() ."\n";

echo "Result 2: ";
$result = new GodLis\Task1\ArrayAdderV2($config);
echo $result->arrayAdder()."\n";
