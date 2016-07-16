<?php
/**
 * Index File Doc Comment
 *
 * This file is a part of a task3
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task3
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

require __DIR__ .'/vendor/autoload.php';

$file = 'config/config.ini';
$config = parse_ini_file($file);
$arrToQuickSort = $arr = $config['arr'];
echo "Массив до сортировки:\n";
print_r($config['arr']);

echo "\nCортировка встроенной функцией:\n";
if (!empty($config['arr'])) {
    sort($arr);
    print_r($arr);
}

echo "\nБыстрая сортировка:\n";
$tmp = new \GodLis\Task3\QuickSort();
if (!empty($arrToQuickSort)) {
    print_r($tmp->quickSort($arrToQuickSort));
}
