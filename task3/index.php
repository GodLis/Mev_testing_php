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
$arrToQuickSort = $config['arr'];

if (!empty($config['arr'])) {
    echo "Массив до сортировки:\n";
    print_r($config['arr']);
}

$tmp = new GodLis\Task3\SortArrayInBuiltFunction($config);
if (!empty($config['arr'])) {
    echo "\nCортировка встроенной функцией:\n";
    print_r($tmp->sortArrayInBuiltFunction());
}

$tmp = new GodLis\Task3\QuickSort($config);
if (!empty($config['arr'])) {
    echo "\nБыстрая сортировка:\n";
    print_r($tmp->quickSort());
}
